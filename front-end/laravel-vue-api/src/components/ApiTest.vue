<script>
    import axios from 'axios';
    export default{
        name: 'ApiTest',
        data(){
            return{
                technologies: [],
                createFormActive: false,
                newTechnology: {
                    name: '',
                    description: ''
                }
            }
        },
        methods:{
            getContent(){
                axios.get('http://localhost:8000/api/technologies')
                .then(res => {
  
                    this.technologies = res.data.data;
                })
                .catch(err => {
                    console.log(err);
                })
            },
            toCreateNewTechnology(){
                this.createFormActive = true;
            },
            saveNewTechnology(){
                
            }
        },
        mounted(){
            this.getContent();
        }
    }
</script>

<template>
    <h1 class="text-center">Technologies:</h1>

    <div class="container">
        <form v-if="createFormActive">
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name" v-model="newTechnology.name">
            <br><br>
            <label for="description">Description</label>
            <br>
            <input type="text" name="description" id="description" v-model="newTechnology.description">
            <br>
            <br><br>

            <input type="submit" value="CREATE">
        </form>

        <div v-else>
            <button class="mb-5" @click="toCreateNewTechnology()">NEW TECHNOLOGY</button>
            <div class="row gy-3 justify-content-between">
                <div v-for="technology in technologies" :key="technology.id" class="card" style="width: 18rem;">
                    <h4 class="card-title ps-3 pt-3">{{technology.name}}</h4>
                    <div class="card-body">
                        <p class="card-description">{{ technology.description }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<style scoped>
@import '../scss/general.scss';
.card{
    border: 1px solid black;
    border-radius: 5px;
}
</style>