<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
      props: ['titulo', 'cor'],
      computed: {
          defineCor: function(){
              return "panel "+ (this.cor || "panel-default");
          }
      }
    }
</script>

<style media="screen">
    .laranja {
        border-color: #f18802;
    }

    .laranja > .panel-heading {
        color: #fbfbfb;
        background-color: #f18802;
        border-color: #f18802;
    }

    .verde {
        border-color: #009e06;
    }

    .verde > .panel-heading {
        color: #fbfbfb;
        background-color: #009e06;
        border-color: #009e06;
    }

    .preto {
        border-color: #000000;
    }

    .preto > .panel-heading {
        color: #fbfbfb;
        background-color: #000000;
        border-color: #000000;
    }
    
</style>
