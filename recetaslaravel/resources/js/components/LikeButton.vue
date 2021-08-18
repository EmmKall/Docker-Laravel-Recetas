<template>
    <div class="d-flex justify-content-center align-items-center">
        <span class="like-btn" @click="likeReceta" :class="{ 'like-active' : isActive }"></span>
        <p> {{ cantidadLikes }} le(s) gusto está receta </p>
    </div>
</template>

<script>
export default {
    props: ['recetaId', 'like', 'likes'],
    mounted() {

    },
    data: function(){
        return{
            isActive: this.like,
            totalLikes: this.likes,
        }
    },
    methods:
    {
        likeReceta()
        {
            axios.post('/recetas/' + this.recetaId)
                .then( respuesta => {
                    /* console.log(respuesta); */
                    if(respuesta.data.attached.length > 0){
                        this.$data.totalLikes++;
                    } else{
                        this.$data.totalLikes--;
                    }

                    this.isActive = !this.isActive;
                })
                .catch( error => {
                    if(error.response.status === 401){
                        window.location = '/register';
                    }
                } )
        }
    },
    computed: {
        cantidadLikes: function()
        {
            return this.totalLikes
        }
    }

}
</script>
