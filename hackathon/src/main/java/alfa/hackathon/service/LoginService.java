package alfa.hackathon.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import alfa.hackathon.model.Usuario;
import alfa.hackathon.repository.UsuarioRepository;

@Service
public class LoginService {

	private Boolean isLogged;
	private Usuario usuario;

	@Autowired
	UsuarioRepository repository;

	public LoginService() {
		isLogged = false;
		usuario = new Usuario();
	}

	public Boolean getIsLogged() {
		return isLogged;
	}

	public Usuario getUsuarioLogado() {
		return usuario;
	}

	public Boolean logar(Usuario user) {
		try {
			Usuario dataUser = repository.findByLogin(user.getLogin());
			
			if(user.getSenha().equals(dataUser.getSenha())) {
				isLogged = true;
				usuario = dataUser;
			}
	
			return isLogged;			
		} catch (Exception e) {
			return false;
		}
	}

	public void desLogar() {
		usuario = new Usuario();
		isLogged = false;
	}
}
