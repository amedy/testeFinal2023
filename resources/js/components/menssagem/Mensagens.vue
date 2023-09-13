<template>
    <div class="mensg bg-blue-500 bg-opacity-70">
        <p>{{ msg }}</p>
    </div>
</template>
<script>
export default {
    name: "Mensagens",
    props: {
        msg: String
    }
}


</script>
<style scoped>
.mensg {
    color: #fff;
    border: 2px solid #B8daff;
    border-radius: 5px;
    padding: 10px;
    max-width: 400px;
    margin: 30px auto;
}

p {
    text-align: center;
}
</style>

