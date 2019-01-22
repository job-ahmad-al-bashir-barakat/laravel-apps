<template>
    <div>
        <div class="content" id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="message" v-for="message in messages">
                        <img class="avatar-md" :src="message.user.avatar_url" data-toggle="tooltip" data-placement="top" :title="message.user.name" alt="avatar">
                        <div class="text-main">
                            <div class="text-group">
                                <div class="text">
                                    <p>{{ message.text }}</p>
                                </div>
                            </div>
                            <span>09:46 AM</span>
                        </div>
                    </div>
                    <!--<div class="date">
                        <hr>
                        <span>Yesterday</span>
                        <hr>
                    </div>
                    <div class="message">
                        <img class="avatar-md" src="{{ asset('chat-assets/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                        <div class="text-main">
                            <div class="text-group">
                                <div class="text">
                                    <p>We've got some killer ideas kicking about already.</p>
                                </div>
                            </div>
                            <span>09:46 AM</span>
                        </div>
                    </div>
                    <div class="message me">
                        <div class="text-main">
                            <div class="text-group me">
                                <div class="text me">
                                    <p>Can't wait! How are we coming along with the client?</p>
                                </div>
                            </div>
                            <span>11:32 AM</span>
                        </div>
                    </div>
                    <div class="message">
                        <img class="avatar-md" src="{{ asset('chat-assets/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                        <div class="text-main">
                            <div class="text-group">
                                <div class="text">
                                    <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                </div>
                            </div>
                            <span>02:56 PM</span>
                        </div>
                    </div>
                    <div class="message me">
                        <div class="text-main">
                            <div class="text-group me">
                                <div class="text me">
                                    <p>Roger that boss!</p>
                                </div>
                            </div>
                            <div class="text-group me">
                                <div class="text me">
                                    <p>I have already started gathering some stuff for the mood boards, excited to start!</p>
                                </div>
                            </div>
                            <span>10:21 PM</span>
                        </div>
                    </div>
                    <div class="message">
                        <img class="avatar-md" src="{{ asset('chat-assets/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                        <div class="text-main">
                            <div class="text-group">
                                <div class="text">
                                    <p>Great start guys, I've added some notes to the task. We may need to make some adjustments to the last couple of items - but no biggie!</p>
                                </div>
                            </div>
                            <span>11:07 PM</span>
                        </div>
                    </div>
                    <div class="date">
                        <hr>
                        <span>Today</span>
                        <hr>
                    </div>
                    <div class="message me">
                        <div class="text-main">
                            <div class="text-group me">
                                <div class="text me">
                                    <p>Well done all. See you all at 2 for the kick-off meeting.</p>
                                </div>
                            </div>
                            <span>10:21 PM</span>
                        </div>
                    </div>
                    <div class="message">
                        <img class="avatar-md" src="{{ asset('chat-assets/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                        <div class="text-main">
                            <div class="text-group">
                                <div class="text">
                                    <div class="attachment">
                                        <button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button>
                                        <div class="file">
                                            <h5><a href="#">Tenacy Agreement.pdf</a></h5>
                                            <span>24kb Document</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span>11:07 PM</span>
                        </div>
                    </div>
                    <div class="message me">
                        <div class="text-main">
                            <div class="text-group me">
                                <div class="text me">
                                    <p>Hope you're all ready to tackle this great project. Let's smash some Brand Concept & Design!</p>
                                </div>
                            </div>
                            <span><i class="material-icons">check</i>10:21 PM</span>
                        </div>
                    </div>
                    <div class="message">
                        <img class="avatar-md" src="{{ asset('chat-assets/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                        <div class="text-main">
                            <div class="text-group">
                                <div class="text typing">
                                    <div class="wave">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="bottom">
                    <form class="position-relative w-100" @submit.prevent="addMessage">
                        <textarea class="form-control" placeholder="Start typing for reply..." rows="1" v-model="message"></textarea>
                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                    </form>
                    <!--<label>
                        <input type="file">
                        <span class="btn attach d-sm-block d-none"><i class="material-icons">attach_file</i></span>
                    </label>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                messages: [],
                message: '',
            }
        },

        created() {
            axios.get('chat/messages').then(response => this.messages = response.data);

            window.Echo
                .channel('messages')
                .listen('SendMessage',({ message }) => this.messages.push(message));
        },

        methods: {
            addMessage() {
                axios.post('chat/messages',{ text: this.message });

                this.messages.push({ text: this.message });

                this.message = '';
            }
        }
    }
</script>
