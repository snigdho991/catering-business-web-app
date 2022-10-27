<template>

    <div class="d-lg-flex">
        <ContactsList :contacts="contacts" :user="user" @selected="startConversationWith"/>
        <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
    </div>
    
</template>

<script>
    import Conversation from './Conversation';
    import ContactsList from './ContactsList'; 
    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: []
            };
        },
        mounted() {
            
            Echo.private(`App.User.${this.user.id}`)
                .listen('NewMessage', (e) => {
                    this.hanleIncoming(e.message);
                });
            axios.get('/contacts')
                .then((response) => {
                    this.contacts = response.data;

                });
        },
        methods: {
            startConversationWith(contact) {
                this.updateUnreadCount(contact, true);
                axios.get(`/conversation/${contact.id}`)
                    .then((response) => {
                        this.messages = response.data;
                        this.selectedContact = contact;
                    })
            },

            saveNewMessage(message) {
                this.messages.push(message);
            },

            hanleIncoming(message) {
                
                if (this.selectedContact && message.from == this.selectedContact.id) {

                    this.saveNewMessage(message);
                    new Noty({ 
                        type:'success', 
                        layout:'bottomLeft', 
                        text: `Incoming message from ${message.from_contact.name} !`, 
                        timeout: 5000
                    }).show()

                    var vid = document.getElementById("noty_audio");
                    vid.muted = false;

                    document.getElementById("noty_audio").play();
                    return;
                }
                
                new Noty({ 
                    type:'success', 
                    layout:'bottomLeft', 
                    text: `Incoming message from ${message.from_contact.name} !`, 
                    timeout: 5000
                }).show()

                var vid_sec = document.getElementById("noty_audio");
                vid_sec.muted = false;

                document.getElementById("noty_audio").play();

                this.updateUnreadCount(message.from_contact, false);
                return;
            },

            updateUnreadCount(contact, reset) {
                this.contacts = this.contacts.map((single) => {
                    if (single.id !== contact.id) {
                        return single;
                    }
                    if (reset)
                        single.unread = 0;
                    else
                        single.unread += 1;
                    return single;
                })
            }
        },
        
        components: {Conversation, ContactsList}
    };
</script>

<style lang="scss" scoped>
    
</style>