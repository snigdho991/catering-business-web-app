<template>
	<div class="chat-leftsidebar me-lg-4">
        <div class="">
            <div class="py-4 border-bottom">
                <div class="media">
                    <div class="align-self-center me-3">
                        <span v-if="user.profile_photo_path">
                        	<img :src="'/assets/uploads/users/' + user.profile_photo_path" class="avatar-xs rounded-circle" alt="">
                        </span>
                        <span v-else>
                        	<img :src="'/assets/uploads/default/avatar.jpg'" class="avatar-xs rounded-circle" alt="">
                        </span>
                    </div>
                    
                    <div class="media-body">
                        <h5 class="font-size-15 mt-0 mb-1">{{ user.name }}</h5>
                        <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> You</p>
                    </div>

           
                </div>
            </div>

            <!-- <div class="search-box chat-search-box py-4">
                <div class="position-relative">
                    <input class="form-control" v-model="search" onblur="if (this.placeholder == '') {this.placeholder = 'Type to search';}" onfocus="if (this.placeholder == 'Type to search') {this.placeholder = '';}" placeholder="Type to search..." type="text" x-webkit-speech="">
                    <i class="bx bx-search-alt search-icon"></i>
                </div>
            </div> -->

            <div class="chat-leftsidebar-nav"> 
               
                <div class="tab-content py-2">
                    <div class="tab-pane show active" id="chat">
                        <div>
                            <h5 class="font-size-14 mb-3">Chat</h5>
                            <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">

                            	<!-- <span v-if="dataContacts == 'no'">
					                <li style="border-bottom:0px; cursor:default;">
					                    <i class="fa fa-user-times" style="margin-left: 130px;font-size: 35px;margin-top: 7px;"></i>
					                    <p style="margin-top: 50px;margin-left: -175px;text-align: center;"><b style="font-weight:550px; color:#666;">No Matching Result !</b>
					                    Make sure you typed the user firstname, lastname or email correctly.</p>
					                </li>
					            </span> -->

                            	<span v-if="!dataContacts.length">
	                                <li class="active" style="border-top: 1px dashed #eff2f7;" v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
	                                    <a href="#">
	                                        <div class="media">
	                                            
	                                            <div class="align-self-center me-3">
	                                                <span v-if="contact.profile_photo_path">
							                        	<img :src="'/assets/uploads/users/' + contact.profile_photo_path" class="avatar-xs rounded-circle" alt="">
							                        </span>
							                        <span v-else>
							                        	<img :src="'/assets/uploads/default/avatar.jpg'" class="avatar-xs rounded-circle" alt="">
							                        </span>
	                                            </div>
	                                            
	                                            <div class="media-body overflow-hidden">
	                                                <h5 class="text-truncate font-size-14 mb-1">{{ contact.name }}</h5>
	                                                <p class="text-truncate mb-0">{{ contact.email }}</p>
	                                            </div>
	                                            
	                                            <span class="unread" v-if="contact.unread">{{ contact.unread }}</span>
	                                        </div>
	                                    </a>
	                                </li>
	                            </span>

	                            <span v-else>
                					<li class="active" style="border-top: 1px dashed #eff2f7;" v-for="contact in dataContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
	                                    <a href="#">
	                                        <div class="media">
	                                            
	                                            <div class="align-self-center me-3">
	                                                <img src="" class="rounded-circle avatar-xs" alt="">
	                                            </div>
	                                            <div class="media-body overflow-hidden">
	                                                <h5 class="text-truncate font-size-14 mb-1">{{ contact.name }}</h5>
	                                                <p class="text-truncate mb-0">{{ contact.email }}</p>
	                                            </div>
	                                            <div class="font-size-11">12 min</div>
	                                            <span class="unread" v-if="contact.unread">{{ contact.unread }}</span>
	                                        </div>
	                                    </a>
	                                </li>
	                            </span>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script> 
    export default {
        /*created() {
            this.searchit();
        },*/

        props: {
            contacts: {
                type: Array,
                default: []
            },
            user: {},
        },
        data() {
            return {
                selected: this.contacts.length ? this.contacts[0] : null,
                search: '',
                dataContacts: this.contacts,
            };
        },

        methods: {
            selectContact(contact) {
                this.selected = contact;
                this.$emit('selected', contact);
            },

           
            /*getResults() {
	            axios.get('api/find/user?q=' + this.search)
	                .then((data) => {
	                    this.dataContacts = data.data
	                    console.log(data)
	                })
	                .catch(() => {
	                    
	                })
	        }*/
        },
        
        computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    } 
                    return contact.unread;
                }]).reverse();
            }
        }
    };
</script>  

<style lang="css" scoped>
	span.unread {
        background: #82e0a8;
        color: #fff;
        position: absolute;
        right: 11px;
        top: 20px;
        display: flex;
        font-weight: 700;
        min-width: 20px;
        justify-content: center;
        align-items: center;
        line-height: 20px;
        font-size: 12px;
        padding: 0 4px;
        border-radius: 3px;
    }

</style>