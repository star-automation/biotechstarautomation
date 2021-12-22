<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:30px;">
<!--                <div class="card card-default" style="color: black">-->
<!--                    <div class="card-header">-->
<!--                        View Flow Totalizer Report-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <a href="/flowtotalizepdfreport" class="btn btn-primary">Flow Totalizer</a>-->

<!--                    </div>-->
<!--                </div>-->
                <div class="card card-default" style="color: black">
                    <div class="card-header">
                        Home
                    </div>
                    <div class="card-body">
                        Welcome To Bio Tech Energy (PVT) LTD

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    computed: {
        welcome(){
            return this.$store.getters.welcome
        }
    }
}
</script>

<style scoped>

</style>
