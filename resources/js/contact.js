document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !subject || !message) {
            Swal.fire({
                icon: "warning",
                title: "Data Belum Lengkap",
                text: "Mohon isi semua data sebelum mengirim pesan.",
                confirmButtonColor: "#3B82F6"
            });
            return;
        }

        const adminNumber = "628990086701";

        const text =
`Halo Admin, saya mengirim pesan dari halaman Contact Us:

Nama: ${name}
Email: ${email}
Subjek: ${subject}

Pesan:
${message}
`;

        const waUrl = `https://wa.me/${adminNumber}?text=${encodeURIComponent(text)}`;

        Swal.fire({
            icon: "success",
            title: "Pesan Disiapkan!",
            text: "Anda akan diarahkan ke WhatsApp.",
            confirmButtonColor: "#10B981"
        }).then(() => {
            window.open(waUrl, "_blank");
        });

    });
});
