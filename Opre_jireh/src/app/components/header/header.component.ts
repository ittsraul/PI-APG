import { Component } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {

  public home: number = 1;
  public contacto: number = 1;
  public perfil: number = 1;
  public novedades: number=1;

  public onHome(): void {
    this.home = 2;
    this.contacto = 1;
    this.perfil = 1;
  }

  public onContacto(): void {
    this.home = 1;
    this.contacto = 2;
    this.perfil = 1;
  }

  public onPerfil(): void {
    this.home = 1;
    this.contacto = 1;
    this.perfil = 2;
  }


}
