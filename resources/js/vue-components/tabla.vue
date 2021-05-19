<template>
    <div class=" items-center text-blue-700 text-3xl">{{ nombre_tabla }}</div>

    <input @keyup='filtra(campo, filtro)' v-for="campo in campos" type="text" v-model="filtro">
    <div class="tabla">
    <table>
        <thead>
        <tr>
            <th class="text-blue-700 text-2xl p-2" v-for="campo in campos">
              <button @click=ordenar(campo)> {{campo}}</button>
            </th>

        </tr>
        </thead>
        <tr @click="show(fila.id)" class="cursor-pointer hover:bg-gray-300" v-for="fila in filas">
            <td class="p-3" v-for="valor in fila">
                {{valor}}
            </td>
        </tr>
    </table>
    </div>
</template>

<script>
export default {
    name: "tabla",
    props:['filas_serializadas', 'campos_serializados','nombre_tabla'],
    data(){
        return{
            filas:[],
            campos:[],
        }
    },
    mounted() {
        this.filas = JSON.parse(this.filas_serializadas);
        this.campos = JSON.parse(this.campos_serializados);

    },
    methods:{
        show(id){
            window.location.href="http://localhost:8000/"+this.nombre_tabla+"/"+id;

        },
        ordenar(campo){
            alert ("Ordenando por "+campo);
            this.filas=this.filas.sort((a,b)=>{
                var r;
                (a[campo]>b[campo])? r= 1: r=-1;
                return r;
                }
            )

        },
        filtra(campo, valor){
            console.log("Filtrando por "+valor+" en el campo "+campo);

            //Esto no funciona, hay que hacerlo bien!!!
            this.filas = this.filas.filter((fila)=> {
                    return fila.campo.includes(valor);
                }
            )
        }
    }

}
</script>

<style scoped>
.tabla{
    @apply flex flex-col justify-center
}

</style>
