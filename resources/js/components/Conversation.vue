<template>
	<div class="w-100 user-chat">
        <div class="card">
            <div class="p-4 border-bottom ">
                <div class="row">
                    <div class="col-md-4 col-9">
                        <h5 class="font-size-15 mb-1">{{ contact ? contact.name : 'Select a Contact' }}</h5>    
                        <p class="text-muted mb-0">{{ contact ? contact.email : "User's Email" }}</p>                       
                    </div>

                    <div class="col-md-8 col-3">
                        
                    </div>
                </div>
            </div>


            <div v-if="contact">
                <MessagesFeed :contact="contact" :messages="messages"/>
                <MessageComposer @send="sendMessage"/>
            </div>
        </div>
    </div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';
    
    export default {
        props: {
            contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
        },
        methods: {
            sendMessage(text) {
                if (!this.contact) {
                    return;
                }
                axios.post('/conversation/send', {
                    contact_id: this.contact.id,
                    text: text
                }).then((response) => {
                    this.$emit('new', response.data);
                })
            }
        },
        components: {MessagesFeed, MessageComposer}
    };
</script>

<style lang="scss" scoped>
</style>