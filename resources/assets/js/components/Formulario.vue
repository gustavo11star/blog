<template>
    <form v-bind:class="cssForm" v-bind:action="action" v-bind:method="defineMehod" v-bind:enctype="enctype">
        <input v-if="alterMethod" type="hidden" name="_method" v-bind:value="alterMethod">
        <input v-if="token"  type="hidden" name="_token" v-bind:value="token">
        <slot></slot>
    </form>
</template>

<script>
    export default {
      props:['cssForm','action','method','enctype','token'],
      data: function(){
          return {
              alterMethod:""
          }
      },
      computed:{
          defineMehod: function() {
              if (this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get") {
                  return this.method.toLowerCase();
              }
              
              if (this.method.toLowerCase() == "put") {
                  this.alterMethod = "put";
              }

              if (this.method.toLowerCase() == "delete") {
                  this.alterMethod = "delete";
              }
              return "post";
          }
      }
    }
</script>
