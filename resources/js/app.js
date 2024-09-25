import "./bootstrap";

// jquery plugins
import $ from "jquery";
window.$ = window.jQuery = $;

// tailwind css components library
import { Tooltip, Ripple, Tab, Input, initTWE } from "tw-elements";
initTWE({ Tooltip, Ripple, Tab, Input });
