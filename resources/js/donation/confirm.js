import Quill from 'quill';

const quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Tulis pesan disini',
});

const donationForm = document.querySelector('#donation-form');
const donationBody = document.querySelector('#message');

donationForm.addEventListener('submit', function (e) {
    const content = quill.root.innerHTML;
    donationBody.value = content;
});

const input = document.getElementById('proof');
const previewPhoto = () => {
    const file = input.files;
    if (file) {
        const fileReader = new FileReader();
        const preview = document.getElementById('proof-preview');
        fileReader.onload = function (event) {
            preview.setAttribute('src', event.target.result);
        };
        fileReader.readAsDataURL(file[0]);
    }
};
input.addEventListener('change', previewPhoto);

// Filepond
let pond;

document.addEventListener('DOMContentLoaded', () => {
    const inputElement = document.querySelector('#proof');

    if (!inputElement) return;

    pond = FilePond.create(inputElement, {
        server: {
            process: {
                url: '/donation/upload', // JANGAN pakai blade {{ }} di JS
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute('content'),
                },
                onload: (response) => {
                    const data = JSON.parse(response);
                    document.getElementById('proof-hidden').value = data.path;
                    return data.path;
                },
            },
        },
    });
});

const bankSelect = document.getElementById('bank-select');
const bankDetail = document.getElementById('bank-detail');
const bankNumber = document.getElementById('bank-number');
const bankHolder = document.getElementById('bank-holder');

bankSelect.addEventListener('change', function () {
    if (!this.value) {
        bankDetail.classList.add('hidden');
        return;
    }

    const selectedOption = this.options[this.selectedIndex];

    bankNumber.textContent = selectedOption.dataset.number;
    bankHolder.textContent = selectedOption.dataset.holder;

    bankDetail.classList.remove('hidden');
});

document.addEventListener('DOMContentLoaded', function () {
    const copyBtn = document.getElementById('copy-btn');
    const bankNumber = document.getElementById('bank-number');
    const copyMessage = document.getElementById('copy-message');

    copyBtn.addEventListener('click', function () {
        const text = bankNumber.textContent.trim();
        if (!text) return;

        const textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);

        copyMessage.classList.remove('hidden');

        setTimeout(() => {
            copyMessage.classList.add('hidden');
        }, 2000);
    });
});

//
const openCameraBtn = document.getElementById('open-camera');
const takePhotoBtn = document.getElementById('take-photo');
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const cameraWrapper = document.getElementById('camera-wrapper');
const fileInput = document.getElementById('proof');

let stream;

openCameraBtn.addEventListener('click', async () => {
    const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

    if (isMobile) {
        // buka file picker biasa (biar muncul pilihan kamera / galeri)
        document.getElementById('proof').click();
        return;
    }

    // kalau desktop baru pakai WebRTC
    try {
        stream = await navigator.mediaDevices.getUserMedia({
            video: true,
        });

        video.srcObject = stream;
        cameraWrapper.classList.remove('hidden');
        takePhotoBtn.classList.remove('hidden');
    } catch (err) {
        alert('Tidak bisa mengakses kamera');
        console.error(err);
    }
});

takePhotoBtn.addEventListener('click', () => {
    const context = canvas.getContext('2d');

    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    context.drawImage(video, 0, 0);

    canvas.toBlob((blob) => {
        const file = new File([blob], 'camera-photo.png', {
            type: 'image/png',
        });

        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);

        fileInput.files = dataTransfer.files;

        alert('Foto berhasil diambil!');

        // Stop camera
        stream.getTracks().forEach((track) => track.stop());
        cameraWrapper.classList.add('hidden');
        takePhotoBtn.classList.add('hidden');
    }, 'image/png');
});
