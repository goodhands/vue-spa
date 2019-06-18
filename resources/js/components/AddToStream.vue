<template>
    <div class="message">
        <div class="message-header">
            Push to the stream...
        </div>

        <div class="message-body">
            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <p class="control">
                    <textarea v-model="form.body" placeholder="I have something to say" name="" id="" cols="30" rows="10" class="textarea"></textarea>
                    
                    <span class="help is-danger" 
                            v-if="form.errors.has('body')" 
                            v-text="form.errors.get('body')">
                    </span>
                    
                    <small>
                        {{ error.errors }}
                    </small>
                </p>

                <p class="control">
                    <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
                </p>
            </form>
        </div>
    </div>
</template>

<script>
export default {

    data(){

        return{
            form: new Form({ body : '' }),

            error: [],
        };
    },

    methods: {
        onSubmit() {
            this.form
            .post('/statuses')
            .then(status => this.$emit('completed', status))
            .catch(errors => this.error = errors)
        }
    }
}
</script>