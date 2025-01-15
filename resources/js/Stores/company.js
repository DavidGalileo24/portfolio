import { defineStore } from "pinia";
import { useForm } from "@inertiajs/vue3";
import Swal from "sweetalert2/dist/sweetalert2";

export const useCompanyStore = defineStore("company", {
    state: () => ({
        form: useForm({
            name: "",
            image: null,
        }),
    }),
    actions: {
        storecompany() {
            this.form.post(route("admin.company.store"));
            this.clearForm();
            this.alert();
        },
        clearForm() {
            this.form.name = "";
            this.form.image = null;
        },
        alert() {
            Swal.fire({
                icon: "success",
                text: "Added company successfully!",
                toast: true,
                position: "bottom-right",
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
            });
        },
        handleFile(e) {
            const image = e.target.files[0];
            if (!image) return;
            const reader = new FileReader();
            reader.onload = (e) => {
                this.form.image = image;
            };
            reader.readAsDataURL(image);
        },
    },
});
