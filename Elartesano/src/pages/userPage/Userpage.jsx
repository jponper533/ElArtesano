import styles from './userPage.module.css'
import { useAuth } from '../../pages/context_providers/AuthProvider'

export default function UserPage() {
  const { user, logout } = useAuth()

  const campos = [
    { label: 'Nombre',             value: user?.nombre    ?? 'Alejandro Ruiz' },
    { label: 'Correo electrónico', value: user?.email     ?? 'alejandro@email.com' },
    { label: 'Contraseña',         value: '••••••••' },
    { label: 'Teléfono',           value: user?.telefono  ?? '+34 612 345 678' },
    { label: 'Fecha de registro',  value: user?.createdAt ?? '12 de marzo, 2023' },
    { label: 'Estado',             value: user?.estado    ?? 'Activo', esEstado: true },
  ]

  return (
    <div className={styles.page}>
      <div className={styles.card}>

        {/* Cabecera */}
        <div className={styles.cardHeader}>
          <div className={styles.avatar}>
            {(user?.nombre ?? 'AR').slice(0, 2).toUpperCase()}
          </div>
          <div>
            <h1 className={styles.nombre}>{user?.nombre ?? 'Alejandro Ruiz'}</h1>
            <p className={styles.rol}>Cliente Artesano</p>
          </div>
        </div>

        {/* Lista de datos */}
        <ul className={styles.lista}>
          {campos.map(({ label, value, esEstado }) => (
            <li key={label} className={styles.fila}>
              <span className={styles.label}>{label}</span>
              {esEstado
                ? <span className={`${styles.badge} ${value === 'Activo' ? styles.activo : styles.inactivo}`}>{value}</span>
                : <span className={styles.value}>{value}</span>
              }
            </li>
          ))}
        </ul>

        {/* Botones */}
        <div className={styles.acciones}>
          <button className={styles.editBtn}>Editar perfil</button>
          <button className={styles.logoutBtn} onClick={logout}>Cerrar sesión</button>
        </div>

      </div>
    </div>
  )
}