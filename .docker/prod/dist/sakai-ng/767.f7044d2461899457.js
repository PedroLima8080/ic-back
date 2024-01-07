"use strict";(self.webpackChunksakai_ng=self.webpackChunksakai_ng||[]).push([[767],{767:(y,a,r)=>{r.r(a),r.d(a,{LoginModule:()=>x});var c=r(6814),l=r(8642),e=r(95),t=r(4769),p=r(3859),g=r(371),m=r(707),d=r(3714),u=r(7853);let f=(()=>{class o{constructor(n,i){this.layoutService=n,this._userService=i,this.formGroup=new e.cw({email:new e.NI("",{validators:[e.kI.required,e.kI.email]}),password:new e.NI("",{validators:[e.kI.required]})})}login(){this.formGroup.markAsDirty(),this.formGroup.valid&&this._userService.login(this.formGroup.get("email").value,this.formGroup.get("password").value)}static#t=this.\u0275fac=function(i){return new(i||o)(t.Y36(p.P),t.Y36(g.K))};static#e=this.\u0275cmp=t.Xpm({type:o,selectors:[["app-login"]],decls:20,vars:3,consts:[[1,"surface-ground","flex","align-items-center","justify-content-center","min-h-screen","min-w-screen","overflow-hidden"],[1,"flex","flex-column","align-items-center","justify-content-center"],[1,"text-center"],[2,"border-radius","56px","padding","0.3rem","background","linear-gradient(180deg, var(--primary-color) 10%, rgba(33, 150, 243, 0) 30%)"],[1,"w-full","surface-card","py-8","px-5","sm:px-8",2,"border-radius","53px"],[1,"text-center","mb-5"],[1,"text-900","text-3xl","font-medium","mb-3"],[1,"text-600","font-medium"],[3,"formGroup"],["for","email1",1,"block","text-900","text-xl","font-medium","mb-2"],["formControlName","email","id","email1","type","text","placeholder","Email address","pInputText","",1,"w-full","md:w-30rem","mb-5",2,"padding","1rem"],["for","password1",1,"block","text-900","font-medium","text-xl","mb-2"],["id","password1","formControlName","password","placeholder","Password","styleClass","mb-5","inputStyleClass","w-full p-3 md:w-30rem",3,"toggleMask"],[1,"flex","align-items-center","justify-content-between","gap-5"],["pButton","","pRipple","","label","Sign In",1,"w-full","p-3","text-xl",3,"disabled","click"]],template:function(i,s){1&i&&(t.TgZ(0,"div",0)(1,"div",1)(2,"h2",2),t._uU(3,"Todo Manager App"),t.qZA(),t.TgZ(4,"div",3)(5,"div",4)(6,"div",5)(7,"div",6),t._uU(8,"Welcome!"),t.qZA(),t.TgZ(9,"span",7),t._uU(10,"Sign in to continue"),t.qZA()(),t.TgZ(11,"div",8)(12,"label",9),t._uU(13,"Email"),t.qZA(),t._UZ(14,"input",10),t.TgZ(15,"label",11),t._uU(16,"Password"),t.qZA(),t._UZ(17,"p-password",12)(18,"div",13),t.TgZ(19,"button",14),t.NdJ("click",function(){return s.login()}),t.qZA()()()()()()),2&i&&(t.xp6(11),t.Q6J("formGroup",s.formGroup),t.xp6(6),t.Q6J("toggleMask",!0),t.xp6(2),t.Q6J("disabled",!s.formGroup.valid))},dependencies:[m.Hq,d.o,e.Fj,e.JJ,e.JL,u.ro,e.sg,e.u],styles:["[_nghost-%COMP%]     .pi-eye, [_nghost-%COMP%]     .pi-eye-slash{transform:scale(1.6);margin-right:1rem;color:var(--primary-color)!important}"]})}return o})(),v=(()=>{class o{static#t=this.\u0275fac=function(i){return new(i||o)};static#e=this.\u0275mod=t.oAB({type:o});static#o=this.\u0275inj=t.cJS({imports:[l.Bz.forChild([{path:"",component:f}]),l.Bz]})}return o})();var h=r(8057);let x=(()=>{class o{static#t=this.\u0275fac=function(i){return new(i||o)};static#e=this.\u0275mod=t.oAB({type:o});static#o=this.\u0275inj=t.cJS({imports:[c.ez,v,m.hJ,h.nD,d.j,e.u5,u.gz,e.u5,e.UX]})}return o})()}}]);