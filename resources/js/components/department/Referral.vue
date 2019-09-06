<template>
  <div class="row mt-3">
     <!-- <MenuBar/> -->
     <!-- <router-view></router-view> -->
     <div class="col-12">
         <div class="card">
             <div class="card-header">My referrals</div>
             <div class="card-body">
               <table class="table  table-striped">
                 <thead>
                   <tr>

                   <th>#</th>
                   <th>Patient name</th>
                   <th>Contact</th>
                   <th>Referred by</th>
                   <th>Time</th>


                 </tr>
                 </thead>
                 <tbody>
                   <tr v-for="(p,index) in referrals" @key="index">
                     <td>{{index+1}}</td>
                     <td>{{p.patient_name}}</td>
                     <td>{{p.contact}}</td>
                     <td>{{p.referred_by}}</td>
                     <td>{{p.created_at | date}}</td>
                    
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
      referrals:[],
      department: this.$route.params.department,
    }

  },
  mounted:function(){
    this.fetchReferral();
  },
  methods:{
    fetchReferral:function(){
      let department = this.$route.params.department
      let uri = `/referral/${department}`
      axios.get(uri).then((response)=>{
        this.referrals = response.data
      })

    }
  }
}
</script>


<style lang="css" scoped>
</style>
