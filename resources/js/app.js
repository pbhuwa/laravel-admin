import "./bootstrap";

// jquery plugins
import $ from "jquery";
window.$ = window.jQuery = $;

// tailwind css components library
import { Tooltip, initTWE } from "tw-elements";
initTWE({ Tooltip });
