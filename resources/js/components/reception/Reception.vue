<template>
  <div>

        <div class="row">
           <!-- <MenuBar/> -->
           <!-- <router-view></router-view> -->
           <div class="col-12">
               <div class="card">
                   <div class="card-header">Add New Patient</div>
                   <div class="card-body">
                       <form action="" @submit.prevent="addPatient">
                           <div class="form-group">
                             <label for="">Patient Name</label>
                             <input type="text" v-model="form.patient" class="form-control">
                           </div>
                           <div class="form-group">
                             <label for="">Contact</label>
                             <input type="text" v-model="form.contact" class="form-control"  placeholder="">
                           </div>
                           <div class="form-group">
                             <label for="">Sex</label>
                             <input type="text" v-model="form.sex" class="form-control"  placeholder="">
                           </div>
                           <div class="form-group">
                             <label for="">Patient DOB</label>
                             <input type="date" v-model="form.dob" class="form-control"  placeholder="">
                           </div>
                           <button type="submit" class="btn btn-outline-dark">Submit</button>
                       </form>
                   </div>
               </div>

             </div>
        </div>

                <div class="row mt-3">
                   <!-- <MenuBar/> -->
                   <!-- <router-view></router-view> -->
                   <div class="col-12">
                       <div class="card">
                           <div class="card-header">Patient List</div>
                           <div class="card-body">
                             <table>
                               <thead>
                                 <tr></tr>
                               </thead>
                               <tbody>
                                 <tr></tr>
                               </tbody>
                             </table>
                           </div>
                       </div>

                     </div>
                </div>
        </div>


</template>

<script>
  //  import MenuBar from './MenuBar'
    export default {

      data(){
        return{
          form:{
            patient:'',
            dob:'',
            sex:'',
            contact:''
          },
          patients:[]
        }
      },
      methods:{

      },
      add(){
    let uri = '/patient/create';
    this.axios.post(uri, this.form).then((response) => {
       this.form = [];

    });
},

        async beforeRouteEnter (to,from,next){

                  console.log('Loading data...');
                  let url = '/department'
                  axios.get(url).then((response) => {

                      if(response.data!="reception"){
                          next('/'+response.data)
                      }
                      next();
                  }).catch((error) => {
                      console.log(error);
                  })



        }

    }
</script>
