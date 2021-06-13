package alfa.hackathon.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import alfa.hackathon.model.Usuario;

public interface UsuarioRepository extends JpaRepository<Usuario, Integer> {

	Usuario findByLogin(String login);
}
