<template>
    <span v-text="formatearFecha"></span>
</template>

<script>
    export default {
        props: ['fecha'],
        mounted() {
            /* console.log(this.fecha); */
            //Se ejecuta una vez que el componente está listo
        },
        computed: {
            formatearFecha() {
                return this.fecha.substr(0, 10);
                /* return moment(this.fecha).locale('es').format('DD [de] MMMM [del] YYYY'); */
            }
        },
    }
</script>
