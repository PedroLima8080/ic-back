"use strict";(self.webpackChunksakai_ng=self.webpackChunksakai_ng||[]).push([[8371],{8371:(G,u,i)=>{i.r(u),i.d(u,{CompanyModule:()=>x});var d=i(6814),p=i(707),v=i(8057),a=i(95),_=i(7853),m=i(3714),g=i(8642),h=i(3617),t=i(4769),y=i(5219),f=i(9552),C=i(3530);function Z(o,c){if(1&o){const e=t.EpF();t.TgZ(0,"div",10),t._uU(1," Empresas "),t.TgZ(2,"p-button",11),t.NdJ("onClick",function(){t.CHM(e);const r=t.oxw();return t.KtG(r.openFormDialog())}),t.qZA()()}}function T(o,c){1&o&&(t.TgZ(0,"tr")(1,"th"),t._uU(2,"Id"),t.qZA(),t.TgZ(3,"th"),t._uU(4,"Nome"),t.qZA(),t.TgZ(5,"th"),t._uU(6,"Criado em"),t.qZA(),t.TgZ(7,"th"),t._uU(8,"Atualizado em"),t.qZA(),t._UZ(9,"th"),t.qZA())}function A(o,c){if(1&o){const e=t.EpF();t.TgZ(0,"tr")(1,"td"),t._uU(2),t.qZA(),t.TgZ(3,"td"),t._uU(4),t.qZA(),t.TgZ(5,"td"),t._uU(6),t.ALo(7,"date"),t.qZA(),t.TgZ(8,"td"),t._uU(9),t.ALo(10,"date"),t.qZA(),t.TgZ(11,"td")(12,"button",12),t.NdJ("click",function(){const s=t.CHM(e).$implicit,l=t.oxw();return t.KtG(l.editRecord(s))}),t.qZA(),t.TgZ(13,"button",13),t.NdJ("click",function(){const s=t.CHM(e).$implicit,l=t.oxw();return t.KtG(l.deleteRecord(s))}),t.qZA()()()}if(2&o){const e=c.$implicit;t.xp6(2),t.Oqu(e.id),t.xp6(2),t.Oqu(e.name),t.xp6(2),t.Oqu(t.lcZ(7,4,e.created_at)),t.xp6(3),t.Oqu(t.lcZ(10,6,e.updated_at))}}let b=(()=>{class o{get showFormDialog(){return this._showFormDialog}set showFormDialog(e){this._showFormDialog=e,e||(this.recordSelected=null)}get records(){return this._companyService.companies}constructor(e){this._companyService=e,this._showFormDialog=!1,this.recordSelected=null,this.formGroup=new a.cw({id:new a.NI(null,{validators:[]}),name:new a.NI(null,{validators:[a.kI.required]})})}openFormDialog(e=null){e?Object.entries(e).forEach(([n,r])=>{this.formGroup.get(n)?.setValue(r)}):Object.entries(this.formGroup.value).forEach(([n,r])=>{this.formGroup.get(n).setValue(null)}),this.formGroup.markAsPristine(),this.formGroup.markAsUntouched(),this.recordSelected=e,this.showFormDialog=!0}closeFormDialog(){this.showFormDialog=!1,this.formGroup.markAsPristine(),this.formGroup.markAsUntouched(),this.recordSelected=null}editRecord(e){this.openFormDialog(e)}deleteRecord(e){this._companyService.delete(e).subscribe()}save(){this.formGroup.markAsDirty(),this.formGroup.markAsUntouched(),this.formGroup.valid&&this._companyService.save(this.formGroup.value).subscribe({next:()=>{this.closeFormDialog()}})}ngOnInit(){this._companyService.load().subscribe()}static#t=this.\u0275fac=function(n){return new(n||o)(t.Y36(h.J))};static#e=this.\u0275cmp=t.Xpm({type:o,selectors:[["app-company"]],features:[t._Bn([h.J])],decls:11,vars:6,consts:[[3,"value"],["pTemplate","caption"],["pTemplate","header"],["pTemplate","body"],["header","Empresa",3,"visible","formGroup","modal","draggable","resizable","visibleChange"],[2,"width","50vw"],["pInputText","","placeholder","Nome","formControlName","name",2,"width","100%"],[2,"display","flex","justify-content","flex-end","margin-top","0.5rem"],["severity","secondary","label","Cancelar",3,"onClick"],["severity","primary","label","Salvar",3,"onClick"],[1,"flex","align-items-center","justify-content-between"],["icon","pi pi-plus",3,"onClick"],["pButton","","pRipple","","icon","pi pi-pencil",1,"p-button-rounded","p-button-success","mr-2",3,"click"],["pButton","","pRipple","","icon","pi pi-trash",1,"p-button-rounded","p-button-danger",3,"click"]],template:function(n,r){1&n&&(t.TgZ(0,"p-table",0),t.YNc(1,Z,3,0,"ng-template",1),t.YNc(2,T,10,0,"ng-template",2),t.YNc(3,A,14,8,"ng-template",3),t.qZA(),t.TgZ(4,"p-dialog",4),t.NdJ("visibleChange",function(l){return r.showFormDialog=l}),t.TgZ(5,"div",5),t._UZ(6,"input",6),t.TgZ(7,"div",7)(8,"p-button",8),t.NdJ("onClick",function(){return r.closeFormDialog()}),t.qZA(),t._uU(9," \xa0\xa0\xa0 "),t.TgZ(10,"p-button",9),t.NdJ("onClick",function(){return r.save()}),t.qZA()()()()),2&n&&(t.Q6J("value",r.records),t.xp6(4),t.Q6J("visible",r.showFormDialog)("formGroup",r.formGroup)("modal",!0)("draggable",!1)("resizable",!1))},dependencies:[p.Hq,p.zx,y.jx,m.o,a.Fj,a.JJ,a.JL,f.iA,C.V,a.sg,a.u,d.uU],encapsulation:2})}return o})(),F=(()=>{class o{static#t=this.\u0275fac=function(n){return new(n||o)};static#e=this.\u0275mod=t.oAB({type:o});static#o=this.\u0275inj=t.cJS({imports:[g.Bz.forChild([{path:"",component:b}]),g.Bz]})}return o})(),x=(()=>{class o{static#t=this.\u0275fac=function(n){return new(n||o)};static#e=this.\u0275mod=t.oAB({type:o});static#o=this.\u0275inj=t.cJS({imports:[d.ez,F,p.hJ,v.nD,m.j,a.u5,_.gz,f.U$,C.S,a.u5,a.UX,m.j]})}return o})()}}]);