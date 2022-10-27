<template>
    <!-- <div class="feed" ref="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to == contact.id ? ' sent' : ' received'}`" :key="message.id">
                <div class="text">
                    {{ message.text }}
                </div><br>

                <span style="font-size:10px; position: relative; top: -2px;">
                    {{ message.created_at | msgTime }}
                </span>

            </li>
        </ul>
    </div> -->

    <div class="feed chat-conversation p-3" ref="msgfeed">
        <ul v-if="contact" class="list-unstyled mb-0">
            
            <li v-for="(message,idx) in messages" :class="`message${message.to == contact.id ? ' right' : ' left'}`" :key="message.id">
                <div class="conversation-list">
                    <div class="dropdown">

                    </div>
                    <div :class="`ctext-wrap${idx === messages.length - 1 ? ' ctext-wrap-mbb' : ' '}`">
                        <div class="conversation-name" :class="`message${message.to == contact.id ? ' text-info' : ' text-primary'}`">{{ message.to == contact.id ? ' You' : contact.name }}</div>
                        <p>
                            {{ message.text }}
                        </p>
                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1" style="line-height: 0 !important;"></i> {{ dateTime(message.created_at) }}</p>
                    </div>
                    
                </div>
            </li>
            
            
        </ul>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {

        mounted() {
            this.scrollToBottom(); 
        },

        props: {
            contact: {
                type: Object
            },
            messages: {
                type: Array,
                required: true
            }
        },

        methods: {
            scrollToBottom() {
                var scroll = this.$refs.msgfeed.scrollHeight;
                var client = this.$refs.msgfeed.clientHeight;

                setTimeout(() => {
                    this.$refs.msgfeed.scrollTop = scroll - client;
                }, 50);
            },

            dateTime(value) {
              //return moment(value).format('YYYY-MM-DD');
              return moment(value).utc(+0).fromNow();
            },
        },

        updated: function () {
            /*contact(contact) {
                console.log('contact')
                this.scrollToBottom();
            },
            messages(messages) {
                this.scrollToBottom(); 
            }*/
            this.scrollToBottom(); 
        }
    };
</script>

<style lang="scss" scoped>
    
</style>