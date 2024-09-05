<template>
    <div>
        <h1>create hotel</h1>
        <form class="p-5">
            <div class="form-group w-25">
                <div class="mb-3">
                    <label for="name">name hotel</label>
                    <input type="text" class="form-control" id="nameHotel"  placeholder="Enter name hotel">
                </div>
                <div class="mb-3">
                    <label for="name">description hotel</label>
                    <input type="text" class="form-control" id="descriptionHotel"  placeholder="Enter description hotel">
                </div>
                <div class="mb-3">
                    <label for="name">address hotel</label>
                    <input type="text" class="form-control" id="addressHotel"  placeholder="Enter address hotel">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create hotel</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "storeHotel"
}
</script>

<style scoped>

</style>
