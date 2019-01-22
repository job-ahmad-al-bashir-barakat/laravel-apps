<template>
    <div>
        <div class="tab-pane fade <!--active show-->" id="members">
            <div class="search">
                <form class="form-inline position-relative">
                    <input type="search" class="form-control" id="people" placeholder="Search for people...">
                    <button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
                </form>
                <button class="btn create" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons">person_add</i></button>
            </div>
            <div class="list-group sort">
                <button class="btn filterMembersBtn active show" data-toggle="list" data-filter="all">All</button>
                <button class="btn filterMembersBtn" data-toggle="list" data-filter="online">Online</button>
                <button class="btn filterMembersBtn" data-toggle="list" data-filter="offline">Offline</button>
            </div>
            <div class="contacts">
                <h1>Contacts</h1>
                <div class="list-group" id="contacts" role="tablist" v-for="contact in contacts">
                    <a href="#" class="filterMembers all <!--online--> offline contact" data-toggle="list">
                        <img class="avatar-md" :src="contact.avatar_url" data-toggle="tooltip" data-placement="top" :title="contact.name" alt="avatar">
                        <div class="status">
                            <i class="material-icons <!--offline--> offline">fiber_manual_record</i>
                        </div>
                        <div class="data">
                            <h5>{{ contact.name }}</h5>
                            <p>Sofia, Bulgaria</p>
                        </div>
                        <div class="person-add">
                            <i class="material-icons">person</i>
                        </div>
                    </a>
                    <!--<a href="#" class="filterMembers all offline contact" data-toggle="list">
                        <img class="avatar-md" src="{{ asset('chat-assets/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                        <div class="status">
                            <i class="material-icons offline">fiber_manual_record</i>
                        </div>
                        <div class="data">
                            <h5>Keith Morris</h5>
                            <p>Chisinau, Moldova</p>
                        </div>
                        <div class="person-add">
                            <i class="material-icons">person</i>
                        </div>
                    </a>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                contacts: [],
            }
        },

        created() {
            axios.get('chat/contacts').then(response => this.contacts = response.data);
        }
    }
</script>
