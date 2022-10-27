<template>
    <div class="p-3 chat-input-section">
        <div class="row">
            <div class="col">
                <div class="position-relative">
                    <textarea class="form-control chat-input" placeholder="Enter Message..." v-model="message" @keydown.enter="send"></textarea>
                    
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" @click="send" style="margin-top: 9px;" class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: ''
            };
        },
        methods: {
            send(e) {
                e.preventDefault();
                
                if (this.message == '') {
                    return;
                }
                this.$emit('send', this.message);
                this.message = '';
            }
        }
    };
</script>

<style lang="scss" scoped>
    .chat-input {
        background-color: #eff2f7!important;
        border-color: #eff2f7!important;
        padding-right: 12px;
        border-radius: 5px;
    }
</style>