import{W as w,r as f,j as e,a as s,b as v}from"./app-9e8762fb.js";import{G as h}from"./GuestLayout-d96a9933.js";import{T as m,I as l}from"./TextInput-86f91879.js";import{I as i}from"./InputLabel-1e12505c.js";import{P as g}from"./PrimaryButton-89b49aac.js";import"./ApplicationLogo-3edba189.js";function I({token:n,email:d}){const{data:r,setData:o,post:p,processing:c,errors:t,reset:u}=w({token:n,email:d,password:"",password_confirmation:""});return f.useEffect(()=>()=>{u("password","password_confirmation")},[]),e(h,{children:[s(v,{title:"Reset Password"}),e("form",{onSubmit:a=>{a.preventDefault(),p(route("password.store"))},children:[e("div",{children:[s(i,{htmlFor:"email",value:"Email"}),s(m,{id:"email",type:"email",name:"email",value:r.email,className:"mt-1 block w-full",autoComplete:"username",onChange:a=>o("email",a.target.value)}),s(l,{message:t.email,className:"mt-2"})]}),e("div",{className:"mt-4",children:[s(i,{htmlFor:"password",value:"Password"}),s(m,{id:"password",type:"password",name:"password",value:r.password,className:"mt-1 block w-full",autoComplete:"new-password",isFocused:!0,onChange:a=>o("password",a.target.value)}),s(l,{message:t.password,className:"mt-2"})]}),e("div",{className:"mt-4",children:[s(i,{htmlFor:"password_confirmation",value:"Confirm Password"}),s(m,{type:"password",name:"password_confirmation",value:r.password_confirmation,className:"mt-1 block w-full",autoComplete:"new-password",onChange:a=>o("password_confirmation",a.target.value)}),s(l,{message:t.password_confirmation,className:"mt-2"})]}),s("div",{className:"flex items-center justify-end mt-4",children:s(g,{className:"ml-4",disabled:c,children:"Reset Password"})})]})]})}export{I as default};
