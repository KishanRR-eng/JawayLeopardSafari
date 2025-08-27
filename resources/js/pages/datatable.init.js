import { DataTable } from "simple-datatables";
import 'simple-datatables/dist/umd/simple-datatables'

new DataTable("#datatable_1", {
  searchable: true,
  fixedHeight: false,
  scrollY: "300px"
})
