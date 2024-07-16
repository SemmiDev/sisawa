/**
 * Auto load assets (script, stylesheet, media)
 */
import "./bootstrap.js";
// import "../css/app.css";
// import jQuery from "jquery";
import "jquery-ui/dist/jquery-ui";
import Swal from "sweetalert2";
// import Alpine from "alpinejs";
// import.meta.glob(["../images/*"]);

// window.jQuery = jQuery;
// window.$ = jQuery;
window.Swal = Swal;
// window.Alpine = Alpine;
// Alpine.start();

// Referensi: https://medium.com/@fbnlsr/how-to-get-rid-of-the-flash-of-unstyled-content-d6b79bf5d75f
$("body").css("opacity", 1);
