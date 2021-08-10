<template>
    <div>
        <input type="submit" class="btn btn-danger d-block w-100" value="Eliminar ✗" v-on:click="eliminarReceta">
        <!-- v-on:click="" / @click:="" -->
    </div>
</template>

<script>
export default{
    props: ['id'],
    /* mounted(){
        console.log('receta actual ' + this.id);
    }, */
    methods: {
        eliminarReceta(){
            /* console.log('receta actual ' + this.id); */
            this.$swal({
                title: '¿Estás seguro?',
                text: "Una vez eliminado, no se recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar',
                }).then((result) => {
                if (result.value) {

                    const params = {
                        id: this.id,

                    }

                    axios.post(`/recetas/${this.id}`,{params, _method: 'delete'})
                        .then(respuesta => {
                            this.$swal({
                                title: 'Eliminado!',
                                text: 'Se ha eliminado.',
                                icon: 'success'
                            });

                            //Eliminar del DOM
                            this.$el.parentNode.parentNode.parenNode.removeChild(this.$el.parentNode.parentNode);

                        })
                        .cath(error => {
                            console.log(error)
                        })


                }
                })
        }
    }
}
</script>
