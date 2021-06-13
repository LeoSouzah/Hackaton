package alfa.hackathon.controller;

import javax.websocket.server.PathParam;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import alfa.hackathon.model.Usuario;
import alfa.hackathon.repository.UsuarioRepository;
import alfa.hackathon.service.LoginService;

@Controller
@RequestMapping("/usuario")
public class UsuarioController {

	@Autowired
	UsuarioRepository repository;
	
	//Serviço de validação usuario logado
	@Autowired
	LoginService login;

	@RequestMapping("lista")
	public String abrirLista(Model model) {
		model.addAttribute("usuarios", repository.findAll());

		return login.getIsLogged() ? "usuario/lista" : "redirect:/login";
	}

	@GetMapping("/formulario")
	public String abrirFormulario(Usuario usuario, Model model) {
		
		return login.getIsLogged() ? "usuario/formulario" : "redirect:/login";
	}
	
	@GetMapping("/editar")
	public String editar(@PathParam(value = "id") Integer id, Model model) {
		Usuario u = repository.getById(id);
		model.addAttribute("usuario", u);

		return login.getIsLogged() ? "usuario/formulario" : "redirect:/login";
	}
	

	@PostMapping("salvar")
	public String salvar(Usuario usuario) {
		repository.save(usuario);
		return "redirect:lista";
	}

	@PostMapping("editar/salvar")
	public String atualizar(Usuario usuario) {
		repository.save(usuario);
		return "redirect:../lista";
	}

	@GetMapping(value = "excluir")
	public String excluir(@PathParam(value = "id") Integer id) {
		repository.deleteById(id);
		return "redirect:../lista";
	}

}
