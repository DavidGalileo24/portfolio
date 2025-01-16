import { defineStore } from "pinia";
import Swal from "sweetalert2/dist/sweetalert2";
import { useForm } from "@inertiajs/vue3";

export const useServiceStore = defineStore("service", {
    state: () => ({
        data: [],
        edit: "",
        form: useForm({
            name: "",
            description: "",
            image: null,
        }),
    }),
    actions: {
        storeservices() {
            this.form.post(route("admin.services.store"));
            this.clearForm();
            this.alert();
        },
        clearForm() {
            this.form.name = "";
            this.form.description = "";
            this.form.image = null;
        },
        alert() {
            Swal.fire({
                icon: "success",
                text: "Added service successfully!",
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
