import styles from './Header.module.css'
import { Link } from "react-router-dom"

export function Header() {
  return (
    <header className={styles.header}>
      <h1>El Artesano</h1>

      <nav>
        <ul>
          <li>
            <Link to="/">Inicio</Link>
          </li>

          <li>
            <Link to="/about">Sobre Nosotros</Link>
          </li>

          <li>
            <Link to="/platos">Platos</Link>
          </li>

          <li>
            <Link to="/contact">Contacto</Link>
          </li>
          <li>
            <Link to="/signin">Iniciar Sesión</Link>
          </li>
        </ul>
      </nav>
    </header>
  )
}