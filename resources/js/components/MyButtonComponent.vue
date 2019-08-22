<template>
    <div>
        <button :type="button-type" v-text="test.name" class="my-btn"></button>
    </div>
</template>

<script>
export default{  
    //all the props exists as html properties for now
    //if their data is not dynamic its passed on its call in html file(like its a default data)
    //if the data is dynamic , the value passed to the vue property in the template
    //has to be declared in the data and returned as part of the data object
    
    
    mounted(){
      this.textdata = "my name"

      axios.post("/api/vue" , {}).then(response => {
          this.test = response.data
    
      });
    } ,
    
    props: [
        'text' , 
        'type'
    ] 
    ,

    data:  function() {
    return {
        'test' : null ,
        'me': "hello world" ,
        'button-type' : "button"
    }  
    }


}
</script>


<style >
.my-btn{
    background-color :green ; 
    padding: 10px 20px ;
    font-weight: bold ;
    color : white
}
</style>