<template>
  <div class="row mt-3">
     <!-- <MenuBar/> -->
     <!-- <router-view></router-view> -->
     <div class="col-12">
         <div class="card">
             <div class="card-header">Patient Notes ({{patientName}})</div>
             <div class="card-body">
               <form class=""  method="post">
                 <div class="form-group">
                   <label for="">{{patientName}} Notes</label>
                   <textarea class="form-control"  cols="8" rows="8"></textarea>

                 </div>
                 <div class="form-group">
                   <button type="button" class="btn btn-primary btn-sm" name="button">Save</button>

                 </div>
               </form>
             </div>
         </div>

       </div>
  </div>

</template>

<script>
export default {
  data(){
    return{

      patientName:this.$route.params.patientName,
    }

  },
  mounted:function(){
  //  this.fetchPatientQueue();
  },
  methods:{
  //   fetchPatientQueue:function(){
  //     let department = this.$route.params.department
  //     let uri = `/queue/${department}`
  //     axios.get(uri).then((response)=>{
  //       this.queue = response.data
  //     })
  //
  //   }
  }
}
 </script>

<style lang="css" scoped>
</style>
