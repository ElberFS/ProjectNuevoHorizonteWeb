<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
            @layer theme{:root,:host{--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-green-600:oklch(.627 .194 149.214);--color-gray-900:oklch(.21 .034 264.665);--color-zinc-50:oklch(.985 0 0);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-800:oklch(.268 .007 34.298);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-4xl:56rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--leading-tight:1.25;--leading-normal:1.5;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings)}}@layer base{:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.sr-only{clip:rect(0,0,0,0);white-space:nowrap;border-width:0;width:1px;height:1px;margin:-1px;padding:0;position:absolute;overflow:hidden}.absolute{position:absolute}.relative{position:relative}.static{position:static}.sticky{position:sticky}.inset-0{inset:calc(var(--spacing)*0)}.inset-y-\[3px\]{inset-block:3px}.start-0{inset-inline-start:calc(var(--spacing)*0)}.end-0{inset-inline-end:calc(var(--spacing)*0)}.top-0{top:calc(var(--spacing)*0)}.z-20{z-index:20}.container{width:100%}@media (width>=40rem){.container{max-width:40rem}}@media (width>=48rem){.container{max-width:48rem}}@media (width>=64rem){.container{max-width:64rem}}@media (width>=80rem){.container{max-width:80rem}}@media (width>=96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.my-6{margin-block:calc(var(--spacing)*6)}.-ms-8{margin-inline-start:calc(var(--spacing)-8)}.ms-1{margin-inline-start:calc(var(--spacing)1)}.ms-2{margin-inline-start:calc(var(--spacing)*2)}.ms-4{margin-inline-start:calc(var(--spacing)*4)}.me-1\.5{margin-inline-end:calc(var(--spacing)*1.5)}.me-2{margin-inline-end:calc(var(--spacing)*2)}.me-3{margin-inline-end:calc(var(--spacing)*3)}.me-5{margin-inline-end:calc(var(--spacing)*5)}.me-10{margin-inline-end:calc(var(--spacing)*10)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.mt-2{margin-top:calc(var(--spacing)*2)}.mt-4{margin-top:calc(var(--spacing)*4)}.mt-5{margin-top:calc(var(--spacing)*5)}.mt-6{margin-top:calc(var(--spacing)*6)}.mt-10{margin-top:calc(var(--spacing)*10)}.mt-auto{margin-top:auto}.-mb-px{margin-bottom:-1px}.mb-0\.5{margin-bottom:calc(var(--spacing).5)}.mb-1{margin-bottom:calc(var(--spacing)1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-5{margin-bottom:calc(var(--spacing)*5)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.mb-\[2px\]{margin-bottom:2px}.block{display:block}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.aspect-square{aspect-ratio:1}.aspect-video{aspect-ratio:var(--aspect-video)}.size-3\!{width:calc(var(--spacing)*3)!important;height:calc(var(--spacing)*3)!important}.size-5{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}.size-8{width:calc(var(--spacing)*8);height:calc(var(--spacing)*8)}.size-9{width:calc(var(--spacing)*9);height:calc(var(--spacing)*9)}.size-full{width:100%;height:100%}.\!h-10{height:calc(var(--spacing)*10)!important}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-7{height:calc(var(--spacing)*7)}.h-8{height:calc(var(--spacing)*8)}.h-9{height:calc(var(--spacing)*9)}.h-10{height:calc(var(--spacing)*10)}.h-14\.5{height:calc(var(--spacing)*14.5)}.h-dvh{height:100dvh}.h-full{height:100%}.min-h-screen{min-height:100vh}.min-h-svh{min-height:100svh}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-8{width:calc(var(--spacing)*8)}.w-9{width:calc(var(--spacing)*9)}.w-10{width:calc(var(--spacing)*10)}.w-\[220px\]{width:220px}.w-\[448px\]{width:448px}.w-full{width:100%}.w-px{width:1px}.max-w-\[335px\]{max-width:335px}.max-w-lg{max-width:var(--container-lg)}.max-w-md{max-width:var(--container-md)}.max-w-none{max-width:none}.max-w-sm{max-width:var(--container-sm)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.cursor-pointer{cursor:pointer}.auto-rows-min{grid-auto-rows:min-content}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.items-start{align-items:flex-start}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-2{gap:calc(var(--spacing)*2)}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}.gap-6{gap:calc(var(--spacing)*6)}:where(.space-y-2>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*2)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-3>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*3)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*3)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-6>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-\[2px\]>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(2px*var(--tw-space-y-reverse));margin-block-end:calc(2px*calc(1 - var(--tw-space-y-reverse)))}:where(.space-x-0\.5>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing).5)var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing).5)calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-2>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*2)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-x-reverse)))}.self-stretch{align-self:stretch}.truncate{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-lg{border-radius:var(--radius-lg)}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-xl{border-radius:var(--radius-xl)}.rounded-ee-lg{border-end-end-radius:var(--radius-lg)}.rounded-es-lg{border-end-start-radius:var(--radius-lg)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-b{border-bottom-style:var(--tw-border-style);border-bottom-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-neutral-200{border-color:var(--color-neutral-200)}.border-transparent{border-color:#0000}.border-zinc-200{border-color:var(--color-zinc-200)}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-neutral-100{background-color:var(--color-neutral-100)}.bg-neutral-200{background-color:var(--color-neutral-200)}.bg-neutral-900{background-color:var(--color-neutral-900)}.bg-white{background-color:var(--color-white)}.bg-zinc-50{background-color:var(--color-zinc-50)}.bg-zinc-200{background-color:var(--color-zinc-200)}.fill-current{fill:currentColor}.stroke-gray-900\/20{stroke:color-mix(in oklab,var(--color-gray-900)20%,transparent)}.p-0{padding:calc(var(--spacing)*0)}.p-6{padding:calc(var(--spacing)*6)}.p-10{padding:calc(var(--spacing)*10)}.px-1{padding-inline:calc(var(--spacing)*1)}.px-5{padding-inline:calc(var(--spacing)*5)}.px-8{padding-inline:calc(var(--spacing)*8)}.px-10{padding-inline:calc(var(--spacing)*10)}.py-0\!{padding-block:calc(var(--spacing)*0)!important}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.py-8{padding-block:calc(var(--spacing)*8)}.ps-3{padding-inline-start:calc(var(--spacing)*3)}.ps-7{padding-inline-start:calc(var(--spacing)*7)}.pe-4{padding-inline-end:calc(var(--spacing)*4)}.pb-4{padding-bottom:calc(var(--spacing)*4)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-center{text-align:center}.text-start{text-align:start}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-xs{font-size:var(--text-xs);line-height:var(--tw-leading,var(--text-xs--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-none{--tw-leading:1;line-height:1}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.leading-tight{--tw-leading:var(--leading-tight);line-height:var(--leading-tight)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-normal{--tw-font-weight:var(--font-weight-normal);font-weight:var(--font-weight-normal)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.\!text-green-600{color:var(--color-green-600)!important}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-black{color:var(--color-black)}.text-green-600{color:var(--color-green-600)}.text-stone-800{color:var(--color-stone-800)}.text-white{color:var(--color-white)}.text-zinc-400{color:var(--color-zinc-400)}.text-zinc-500{color:var(--color-zinc-500)}.text-zinc-600{color:var(--color-zinc-600)}.lowercase{text-transform:lowercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-xs{--tw-shadow:0 1px 2px 0 var(--tw-shadow-color,#0000000d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.outline{outline-style:var(--tw-outline-style);outline-width:1px}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.group-data-open\/disclosure-button\:block:is(:where(.group\/disclosure-button)[data-open] *){display:block}.group-data-open\/disclosure-button\:hidden:is(:where(.group\/disclosure-button)[data-open] *){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:start-\[0\.4rem\]:before{content:var(--tw-content);inset-inline-start:.4rem}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-zinc-800\/5:hover{background-color:color-mix(in oklab,var(--color-zinc-800)5%,transparent)}.hover\:text-zinc-800:hover{color:var(--color-zinc-800)}}.data-open\:block[data-open]{display:block}@media (width<64rem){.max-lg\:hidden{display:none}}@media (width<48rem){.max-md\:flex-col{flex-direction:column}.max-md\:pt-6{padding-top:calc(var(--spacing)*6)}}@media (width>=40rem){.sm\:w-\[350px\]{width:350px}.sm\:px-0{padding-inline:calc(var(--spacing)*0)}}@media (width>=48rem){.md\:hidden{display:none}.md\:w-\[220px\]{width:220px}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:p-10{padding:calc(var(--spacing)*10)}}@media (width>=64rem){.lg\:-ms-px{margin-inline-start:-1px}.lg\:ms-0{margin-inline-start:calc(var(--spacing)*0)}.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:aspect-auto{aspect-ratio:auto}.lg\:h-8{height:calc(var(--spacing)*8)}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:max-w-none{max-width:none}.lg\:grow{flex-grow:1}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-ss-lg{border-start-start-radius:var(--radius-lg)}.lg\:rounded-e-lg{border-start-end-radius:var(--radius-lg);border-end-end-radius:var(--radius-lg)}.lg\:rounded-e-lg\!{border-start-end-radius:var(--radius-lg)!important;border-end-end-radius:var(--radius-lg)!important}.lg\:rounded-ee-none{border-end-end-radius:0}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}.lg\:px-0{padding-inline:calc(var(--spacing)*0)}}:where(.rtl\:space-x-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *)>:not(:last-child)){--tw-space-x-reverse:1}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-neutral-700{border-color:var(--color-neutral-700)}.dark\:border-neutral-800{border-color:var(--color-neutral-800)}.dark\:border-stone-800{border-color:var(--color-stone-800)}.dark\:border-zinc-700{border-color:var(--color-zinc-700)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-neutral-700{background-color:var(--color-neutral-700)}.dark\:bg-stone-950{background-color:var(--color-stone-950)}.dark\:bg-white\/30{background-color:color-mix(in oklab,var(--color-white)30%,transparent)}.dark\:bg-zinc-800{background-color:var(--color-zinc-800)}.dark\:bg-zinc-900{background-color:var(--color-zinc-900)}.dark\:bg-linear-to-b{--tw-gradient-position:to bottom in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.dark\:from-neutral-950{--tw-gradient-from:var(--color-neutral-950);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:to-neutral-900{--tw-gradient-to:var(--color-neutral-900);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:stroke-neutral-100\/20{stroke:color-mix(in oklab,var(--color-neutral-100)20%,transparent)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-white{color:var(--color-white)}.dark\:text-white\/80{color:color-mix(in oklab,var(--color-white)80%,transparent)}.dark\:text-zinc-400{color:var(--color-zinc-400)}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:bg-white\/\[7\%\]:hover{background-color:color-mix(in oklab,var(--color-white)7%,transparent)}.dark\:hover\:text-white:hover{color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}.\[\&\>div\>svg\]\:size-5>div>svg{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-4){width:calc(var(--spacing)*4);height:calc(var(--spacing)*4)}:where(.\[\:where\(\&\)\]\:size-5){width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-6){width:calc(var(--spacing)*6);height:calc(var(--spacing)*6)}}@property --tw-translate-x{syntax:"";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"";inherits:false;initial-value:0}@property --tw-space-y-reverse{syntax:"";inherits:false;initial-value:0}@property --tw-space-x-reverse{syntax:"";inherits:false;initial-value:0}@property --tw-border-style{syntax:"";inherits:false;initial-value:solid}@property --tw-leading{syntax:"";inherits:false}@property --tw-font-weight{syntax:"";inherits:false}@property --tw-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"";inherits:false}@property --tw-inset-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"";inherits:false}@property --tw-ring-color{syntax:"";inherits:false}@property --tw-ring-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"";inherits:false}@property --tw-inset-ring-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-outline-style{syntax:"";inherits:false;initial-value:solid}@property --tw-duration{syntax:"";inherits:false}@property --tw-content{syntax:"";inherits:false;initial-value:""}@property --tw-gradient-position{syntax:"";inherits:false}@property --tw-gradient-from{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-via{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-to{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-stops{syntax:"";inherits:false}@property --tw-gradient-via-stops{syntax:"";inherits:false}@property --tw-gradient-from-position{syntax:"<length-percentage>";inherits:false;initial-value:0%}@property --tw-gradient-via-position{syntax:"<length-percentage>";inherits:false;initial-value:50%}@property --tw-gradient-to-position{syntax:"<length-percentage>";inherits:false;initial-value:100%}
        </style>
    </head>
    <body class="bg-white">
        <header class="bg-white shadow-md">
            <div class="bg-black w-full text-white text-sm py-2 px-4 flex justify-between items-center animate-fade-in">
                <div class="space-x-3">
                    <span>Contáctanos al +51 987654321</span>
                    <span>Correo: contacto@example.com</span>
                </div>
                <div class="space-x-2">
                    <a href="#" class="hover:text-gray-300 transition duration-300">Facebook</a>
                    <a href="#" class="hover:text-gray-300 transition duration-300">Instagram</a>
                    <a href="#" class="hover:text-gray-300 transition duration-300">Tiktok</a>
                </div>
            </div>

            <div class="bg-white w-full text-sm py-2 px-4 flex justify-between items-center shadow-lg">
                <a href="#" class="text-black text-4xl font-bold animate-slide-in-left">LOGO</a>
                <div class="flex items-center">
                    <nav class="flex items-center text-base space-x-4 animate-fade-in">
                        <a href="#" class="text-gray-800 hover:text-[#163E73] transition duration-300 font-semibold">Nuevo Horizonte</a>
                        <span class="text-gray-400">•</span>
                        <a href="#" class="text-gray-800 hover:text-[#163E73] transition duration-300 font-semibold">Eventos del mes</a>
                        <span class="text-gray-400">•</span>
                        <a href="#" class="text-gray-800 hover:text-[#163E73] transition duration-300 font-semibold">Paquetes</a>
                        <span class="text-gray-400">•</span>
                        <a href="#" class="text-gray-800 hover:text-[#163E73] transition duration-300 font-semibold">Reseñas</a>
                        <span class="text-gray-400">•</span>
                        <a href="#" class="text-gray-800 hover:text-[#163E73] transition duration-300 font-semibold">Blog</a>
                        <a href="#" class="bg-[#163E73] text-white px-6 py-2 rounded-md hover:bg-[#1b72bf] transition duration-300 ml-4 font-semibold shadow-md border border-transparent">Contacto</a>
                    </nav>
                    <div class="ml-5 flex items-center text-base">
                        @if (Route::has('login'))
                            <nav class="flex items-center"> 
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-[#163E73] transition duration-300 font-semibold">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="bg-[#163E73] text-white px-6 py-2 rounded-md hover:bg-[#1b72bf] transition duration-300 ml-4 font-semibold shadow-md border border-transparent">
                                        Iniciar Sesión
                                    </a>
                                @endauth
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <main>

            <section id="Hero" style="position: relative; height: 600px;">
                <img
                    src="/img/BGHero.png"
                    alt="Hero Image"
                    style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;"
                />
                <div class="absolute inset-0 flex flex-col justify-center items-start text-white py-20 px-4 z-20">
                    <div class="mt-20 ml-32 animate-slide-in-left">
                        <p class="text-7xl font-bold leading-tight mb-2">
                            Cruzá fronteras con 
                        </p>
                        
                        <img src="/svg/textHero.svg" alt="Nuevo Horizonte" class="mb-8" style="width: 400px; max-width: 100%; height: auto;" />
                        
                        <a
                            href="#"
                            class="bg-[#163E73] text-white px-8 py-3 rounded-md hover:bg-[#1b72bf]   transition duration-300 text-lg font-medium shadow-lg inline-block"
                        >
                            Contactanos
                        </a>
                    </div>
                </div>
            </section>

            <section id="about" class="py-16 bg-[#f5ffff]">
                <div class="mx-auto max-w-7xl px-4 flex flex-row flex-wrap items-center justify-center gap-10 md:gap-50">
                    <div class="relative w-[350px] animate-slide-in-left">
                        <img
                            src="/img/About.png"
                            alt="Imagen de mapa mundial 1"
                            class="w-[350px] h-[320px] rounded-2xl shadow-lg object-cover hover-scale-rotate"
                        >
                    </div>

                    <div class="max-w-[550px] text-center md:text-left animate-slide-in-right">
                        <h2 class="text-4xl md:text-5xl font-bold text-black mb-2">Nuevo Horizonte</h2>
                        <p class="text-xl md:text-2xl text-gray-700 italic mb-6">Agencia Mayorista</p>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            En Nuevo Horizonte nacimos con el compromiso de ofrecer atención personalizada al mercado peruano, respaldada por un equipo con más de 30 años de experiencia en turismo. Nos enfocamos en brindar servicios de calidad al cliente B2B, con valores como honestidad, compromiso e innovación, buscando consolidarnos como líderes en el sector.
                        </p>
                    </div>
                </div>
            </section>

            <section id="alianzas" class="bg-white py-12">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl md:text-5xl font-bold text-center text-black mb-2">Nuestras Alianzas</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-4 flex items-center justify-center rounded-lg shadow-md">
                        <img src="/img/aliados/logo01.png " alt="Logo 1" class="max-h-24">
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center rounded-lg shadow-md">
                        <img src="/img/aliados/logo02.png" alt="Logo 2" class="max-h-24">
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center rounded-lg shadow-md">
                        <img src="/img/aliados/logo03.png" alt="Logo 3" class="max-h-24">
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center rounded-lg shadow-md">
                        <img src="/img/aliados/logo04.png" alt="Logo 4" class="max-h-24">
                    </div>
                    </div>
                </div>
            </section>
<section class="py-16 md:py-24 bg-[#f1ffff]">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-center md:justify-start mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mr-4">Tu Experiencia</h2>
            <img
                src="apple-touch-icon.png" 
                alt="Logo de la empresa"
                class="h-12 w-auto" 
            >
        </div>

        <div class="flex justify-center"> 
            <div class="flex space-x-8 overflow-x-auto pb-6 md:pb-0 scrollbar-hide {{-- md:-mr-0 ya no es necesario aquí --}}">
                <div class="flex-none w-[300px] bg-white p-6 rounded-lg shadow-md flex flex-col justify-between">
                    <p class="text-gray-700 mb-6 text-sm leading-relaxed">
                        ¡Absolutamente genial! Desde el primer contacto hasta el último día, todo fue impecable.
                        Nos sentimos totalmente cuidados y pudimos disfrutar cada momento sin preocupaciones.
                        ¡Gracias por una experiencia inolvidable!
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0 mr-3"></div> {{-- Pequeño círculo (avatar) --}}
                        <div>
                            <p class="font-semibold text-gray-800">Ana y Luis M.</p>
                            <p class="text-sm text-gray-500">Lima, Peru</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-[300px] bg-white p-6 rounded-lg shadow-md flex flex-col justify-between">
                    <p class="text-gray-700 mb-6 text-sm leading-relaxed">
                        ¡Absolutamente genial! Desde el primer contacto hasta el último día, todo fue impecable.
                        Nos sentimos totalmente cuidados y pudimos disfrutar cada momento sin preocupaciones.
                        ¡Gracias por una experiencia inolvidable!
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0 mr-3"></div> {{-- Pequeño círculo (avatar) --}}
                        <div>
                            <p class="font-semibold text-gray-800">Ana y Luis M.</p>
                            <p class="text-sm text-gray-500">Lima, Peru</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-[300px] bg-white p-6 rounded-lg shadow-md flex flex-col justify-between">
                    <p class="text-gray-700 mb-6 text-sm leading-relaxed">
                        ¡Absolutamente genial! Desde el primer contacto hasta el último día, todo fue impecable.
                        Nos sentimos totalmente cuidados y pudimos disfrutar cada momento sin preocupaciones.
                        ¡Gracias por una experiencia inolvidable!
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0 mr-3"></div> 
                        <div>
                            <p class="font-semibold text-gray-800">Ana y Luis M.</p>
                            <p class="text-sm text-gray-500">Lima, Peru</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>
            <section id="noticias" class="py-16 bg-[#f5ffff]">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-900 text-center mb-12 animate-fade-in-up">
                        Nuevo Horizonte Noticias
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white rounded-lg shadow-xl overflow-hidden animate-slide-in-bottom delay-100">
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-gray-600 font-bold text-xl">
                                <img src="/img/noticias/not01.jpg" alt="Imagen de Noticia 1" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Descubre los Secretos Incas</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Perú es un país lleno de maravillas naturales y culturales, pero hay rincones que parecen sacados de una película de ciencia ficción. Explora la mística ciudadela de Machu Picchu y los enigmáticos caminos del Camino Inca.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-xl overflow-hidden animate-slide-in-bottom delay-200">
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-gray-600 font-bold text-xl">
                                <img src="/img/noticias/not02.png" alt="Imagen de Noticia 2" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Aventura Amazónica: Selva Peruana</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Adéntrate en el corazón del Amazonas peruano. Conoce la increíble biodiversidad, sus comunidades nativas y la exuberante flora y fauna que te dejarán sin aliento.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-xl overflow-hidden animate-slide-in-bottom delay-300">
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-gray-600 font-bold text-xl">
                                <img src="/img/noticias/not03.png" alt="Imagen de Noticia 3" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Gastronomía Peruana: Un Viaje de Sabores</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    La gastronomía peruana es reconocida mundialmente por su diversidad y exquisito sabor. Desde la costa hasta la sierra y selva, cada región ofrece una experiencia culinaria única e inolvidable.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-white py-16 px-4 relative overflow-hidden">
                <div class="container mx-auto flex  md:flex-row items-center justify-center gap-12">
                    <div class="md:w-1/2 flex justify-center md:justify-start animate-slide-in-left">
                        <img
                            src="Mapa_mundi_blanco-min.png"
                            alt="Mapa mundi punteado"
                            class="w-full max-w-[900px] h-auto rounded-lg shadow-lg object-cover md:-ml-[180px] hover-scale-rotate"
                        />
                    </div>
                    <div class="md:w-1/2 flex flex-col  md:items-start text-center md:text-left animate-slide-in-right">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">¡Suscríbete!</h2>
                        <p class="text-gray-600 mb-8">Únete a nuestra comunidad y recibe ofertas exclusivas</p>
                        <form class="max-w-md w-full">
                            <div class="mb-4">
                                <label for="nombre" class="block text-gray-700 text-lg font-semibold mb-2">Nombre</label>
                                <input
                                    type="text"
                                    id="nombre"
                                    placeholder="Ingresa tu nombre"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#29B9D9]"
                                />
                            </div>
                            <div class="mb-8">
                                <label for="email" class="block text-gray-700 text-lg font-semibold mb-2">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    placeholder="Ingresa tu correo electrónico"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#29B9D9]"
                                />
                            </div>
                            <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-4">
                                <button
                                    type="submit"
                                    class="bg-[#163E73] text-white font-semibold py-3 px-8 rounded-md hover:bg-[#29B9D9] transition duration-300"
                                >
                                    REGISTRARSE
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-[#163E73] text-white py-16 px-4 animate-fade-in">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8">
                <div class="text-center md:text-left">
                    <div class="text-white text-5xl font-bold mb-4">LOGO</div>
                    <p class="text-gray-300 text-2xl leading-snug">
                        Transforma tus sueños de viajes con experiencias inolvidables
                    </p>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-white text-xl font-bold mb-4 uppercase">Politicas</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-[#29B9D9] transition duration-300">Terminos y Condiciones</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-[#29B9D9] transition duration-300">Preguntas Frecuentes</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-[#29B9D9] transition duration-300">Política de privacidad</a></li>
                    </ul>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-white text-xl font-bold mb-4 uppercase">Atencion al Cliente</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-[#29B9D9] transition duration-300">Atencion al cliente</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-[#29B9D9] transition duration-300">Libro de reclamaciones</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-[#29B9D9] transition duration-300">Como reservar</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        @if (Route::has('login'))
        @endif
    </body>
</html>
