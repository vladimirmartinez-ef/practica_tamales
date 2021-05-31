<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Que puede elegir:</div>

                    <div class="card-body">
                        Ricos tamalitos

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                ventas: [],
                venta:{
                    id:0,
                    user_id:0,
                    combo_id:0
                },
                usuarios:[],
                usuarios:{
                    id:0,
                    nombre:'',
                    email:'',
                    direccion:'',
                    
                },
                combos:[],
                combos:{
                    id:0,
                    nombre:'',
                    descripcion:'',
                    precio:0.0
                }
            }
        },
        created(){
            axios.get('/ventas').then(res=>{
                this.ventas=res.data
            })
            axios.get('/combos').then((res)=>{
                this.combos = res.data
            })
            
        },
        methods:{
            getUsuarios(){
                
            },
            agregarVenta(){
                const nuevaVenta = {user_id:this.venta.user_id,combo_id:this.combo_id}
                this.venta = {id:0,user_id:0, combo_id:0}
                axios.post('/ventas',nuevaVenta)
                .then((res)=>{
                    const ventaServidor = res.data
                    this.ventas.push(ventaServidor)
                })
            },
            eliminarVenta(venta,index) {
                const confirma = confirm(`Eliminar venta ${venta.id}`)
                if (confirma) {
                    axios.delete(`/ventas/${venta.id}`)
                    .then(()=>{
                        this.ventas.splice(index,1)
                    })
                }
            }
        }
    }
</script>
