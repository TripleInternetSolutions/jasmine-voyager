require('./inc/tinymce/langs/he_IL');

window.tinymce_init_callback = function (editor) {
    editor.rtl = true;
    editor.language = 'he_IL';
    editor.contentDocument.dir = 'rtl';

    window.editor = editor;
};