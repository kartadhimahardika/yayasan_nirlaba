import "./bootstrap";
import './toast';

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";

import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginImageTransform from 'filepond-plugin-image-transform';
import FilePondPluginImageResize from 'filepond-plugin-image-resize';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import 'filepond/dist/filepond.min.css';

FilePond.registerPlugin(FilePondPluginImagePreview);
FilePond.registerPlugin(FilePondPluginImageTransform);
FilePond.registerPlugin(FilePondPluginImageResize);
FilePond.registerPlugin(FilePondPluginFileValidateSize);
FilePond.registerPlugin(FilePondPluginFileValidateType);

window.FilePond = FilePond;

Alpine.plugin(focus);

window.Alpine = Alpine;

Alpine.start();
