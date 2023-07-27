import{r as m,W as v,j as a,a as s}from"./app-9e8762fb.js";import{T as d,I as c}from"./TextInput-86f91879.js";import{I as p}from"./InputLabel-1e12505c.js";import{P as y}from"./PrimaryButton-89b49aac.js";import{$ as x}from"./transition-20b1bccf.js";function k({className:w=""}){const l=m.useRef(),u=m.useRef(),{data:e,setData:t,errors:o,put:f,reset:n,processing:h,recentlySuccessful:g}=v({current_password:"",password:"",password_confirmation:""});return a("section",{className:w,children:[a("header",{children:[s("h2",{className:"text-lg font-medium text-gray-900 dark:text-gray-100",children:"Update Password"}),s("p",{className:"mt-1 text-sm text-gray-600 dark:text-gray-400",children:"Ensure your account is using a long, random password to stay secure."})]}),a("form",{onSubmit:r=>{r.preventDefault(),f(route("password.update"),{preserveScroll:!0,onSuccess:()=>n(),onError:i=>{i.password&&(n("password","password_confirmation"),l.current.focus()),i.current_password&&(n("current_password"),u.current.focus())}})},className:"mt-6 space-y-6",children:[a("div",{children:[s(p,{htmlFor:"current_password",value:"Current Password"}),s(d,{id:"current_password",ref:u,value:e.current_password,onChange:r=>t("current_password",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"current-password"}),s(c,{message:o.current_password,className:"mt-2"})]}),a("div",{children:[s(p,{htmlFor:"password",value:"New Password"}),s(d,{id:"password",ref:l,value:e.password,onChange:r=>t("password",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"new-password"}),s(c,{message:o.password,className:"mt-2"})]}),a("div",{children:[s(p,{htmlFor:"password_confirmation",value:"Confirm Password"}),s(d,{id:"password_confirmation",value:e.password_confirmation,onChange:r=>t("password_confirmation",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"new-password"}),s(c,{message:o.password_confirmation,className:"mt-2"})]}),a("div",{className:"flex items-center gap-4",children:[s(y,{disabled:h,children:"Save"}),s(x,{show:g,enter:"transition ease-in-out",enterFrom:"opacity-0",leave:"transition ease-in-out",leaveTo:"opacity-0",children:s("p",{className:"text-sm text-gray-600 dark:text-gray-400",children:"Saved."})})]})]})]})}export{k as default};
