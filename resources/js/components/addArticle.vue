<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">add a new article</div>

                <div class="card-body">
                    <form @submit.prevent="addArticle">
                        <div class="form-group">
                            <input name="title" class="form-control"  placeholder="title" v-model="form.title" >
                            <small class="text-danger"  v-if="form.errors.has('title')" v-text="form.errors.get('title')">djfljdfj</small>
                        </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" placeholder="body" rows="3" v-model="form.body"></textarea>
                            <small class="text-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')">djfljdfj</small>
                        </div>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                      
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    title : '',
                    body : ''
                })
            }
            
        },
        methods: {
            addArticle() {
                this.form.post('/article')
                .then(r => this.$emit('completed', r));
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
