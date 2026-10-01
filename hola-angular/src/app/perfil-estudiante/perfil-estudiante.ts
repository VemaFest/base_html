import { Component } from '@angular/core';

@Component({
  imports: [],
  selector: 'app-perfil-estudiante',
  styleUrl: './perfil-estudiante.css',
  templateUrl: './perfil-estudiante.html',
})
export class PerfilEstudiante {
  nombre: string = 'Victor Eduardo Molina Alavarado';
  numeroCuenta: string = '20232330060';
  carrera: string = 'Ingeniería en Sistemas';
}

