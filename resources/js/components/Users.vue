<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users Component</div>

                    <div class="card-body">
                        <p v-for="user in users">{{user.name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                users:[]
            }
        },
        props:[
            'data'
        ],
        mounted(){
            this.users = this.data
            console.log(this.users)
            console.log('lala')
            console.log(this.data)
        }
    }
</script>
