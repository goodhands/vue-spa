<template>
    <div class="container">
        <div class="loader" v-show="stillLoading"></div>
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses" :key="status">
                    <div class="message-header">Sam said...</div>

                    <div class="message-body">
                        <p>
                            {{ status.user.name }} said....
                        </p>

                        <p>
                            {{ status.created_at | ago }}
                            <!-- Above example uses filters with the pipe symbol, you can continue piping with different methods -->
                        </p>

                    </div>

                    <div class="message-body" v-text="status.body"></div>
                </div>

                <!-- add to stream form -->
                <add-to-stream @completed="addStatus"></add-to-stream>

                 <!-- when there is no status -->
                <div v-if="statuses.length == 0">
                    <h2>Hello, we don't have any status right now.</h2>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

    import moment from 'moment';
    import Status from '../models/Status'
    import AddToStream from '../components/AddToStream'

    export default {

        components: {
            AddToStream
        },

        data() {
            return {
                statuses: [],

                stillLoading: true,

                isStatusEmpty: true,
            }
        },

        filters:    {

            ago(date){
                return moment(date).fromNow();
            }

        },

        created() {
            Status.all( statuses => this.statuses = statuses );
                // .then(response => this.statuses = response.data);
                // .then( ({data}) => this.statuses = data); //es6
            this.stillLoading = false;
            this.isStatusEmpty = this.statuses.length > 0 ? true : false;
        },

        methods: {
            addStatus(status){
                this.statuses.unshift(status);

                alert('Your status has been added');

                window.scroll(0, 0);
            }
        },

    }
</script>
