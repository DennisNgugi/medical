<template>
  <div class="row mt-3">
     <!-- <MenuBar/> -->
     <!-- <router-view></router-view> -->
     <div class="col-12">
         <div class="card">
             <div class="card-header">Patient Queue (IN ORDER OF TIME)</div>
             <div class="card-body">
               <table class="table  table-striped">
                 <thead>
                   <tr>

                   <th>#</th>
                   <th>Patient name</th>
                   <th>Contact</th>
                   <th>Time</th>
                   <th>Action</th>

                 </tr>
                 </thead>
                 <tbody>
                   <tr v-for="(p,index) in queue" @key="index">
                     <td>{{index+1}}</td>
                     <td>{{p.patient_name}}</td>
                     <td>{{p.contact}}</td>
                     <td>{{p.created_at | date}}</td>
                     <td>
                      <router-link :to="{ name: 'notes', params: {department:department, patientID:p.patient_id, patientName:p.patient_name} }" class="btn btn-secondary btn-sm">Call</router-link>
                     </td>
                   </tr>
                 </tbody>
               </table>
             </div>
         </div>

       </div>
  </div>

</template>

<script>
export default {
  data(){
    return{
      queue:[],
      department: this.$route.params.department,
    }

  },
  mounted:function(){
    this.fetchPatientQueue();
  },
  methods:{
    fetchPatientQueue:function(){
      let department = this.$route.params.department
      let uri = `/queue/${department}`
      axios.get(uri).then((response)=>{
        this.queue = response.data
      })

    }
  }
}
</script>

<style lang="css" scoped>
</style>
