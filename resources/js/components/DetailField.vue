
<template>
    <vue-good-table
        :columns="columns"
        :rows="data"
        :search-options="{
            enabled: true,
            trigger: '',
            skipDiacritics: true,
            placeholder: 'Name or Email'
        }"
        :sort-options="{
            enabled: true,
        }"
        :pagination-options="{
            enabled: true,
            mode: 'records',
            perPage: 5,
            position: 'bottom',
            perPageDropdown: [5,10,20,30,40,50],
            nextLabel: 'Next',
            prevLabel: 'Prev',
            rowsPerPageLabel: 'Rows per page',
        }"
      />
    </div>
</template>
<script>
import { VueGoodTable } from 'vue-good-table';
import 'vue-good-table/dist/vue-good-table.css'
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    data: () => ({
        data: [],
        currentSort:'',
        currentSortDir:'',
        search: '',
        searchSelection: '',
        pageSize: 5,
        currentPage: 1,
        columns: [],
    }),

    created () {
        this.data = JSON.parse(this.field.value);
        this.columns = this.field.columns;
    },
    components: {
        VueGoodTable,
    }
}
</script>