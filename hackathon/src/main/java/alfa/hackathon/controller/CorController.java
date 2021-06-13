package alfa.hackathon.controller;

import javax.websocket.server.PathParam;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import alfa.hackathon.model.Cor;
import alfa.hackathon.repository.CorRepository;
import alfa.hackathon.service.LoginService;

@Controller
@RequestMapping("/cor")
public class CorController {

	@Autowired
	CorRepository repository;
	
	//Serviço de validação usuario logado
	@Autowired
	LoginService login;

	@RequestMapping("lista")
	public String abrirLista(Model model) {
		model.addAttribute("cores", repository.findAll());

		return login.getIsLogged() ? "cor/lista" : "redirect:/login";
	}

	@GetMapping("/formulario")
	public String abrirFormulario(Cor cor, Model model) {
		
		return login.getIsLogged() ? "cor/formulario" : "redirect:/login";
	}
	
	@GetMapping("/editar")
	public String editar(@PathParam(value = "id") Integer id, Model model) {
		Cor c = repository.getById(id);
		model.addAttribute("cor", c);

		return login.getIsLogged() ? "cor/formulario" : "redirect:/login";
	}
	

	@PostMapping("salvar")
	public String salvar(Cor cor) {
		repository.save(cor);
		return "redirect:lista";
	}

	@PostMapping("editar/salvar")
	public String atualizar(Cor cor) {
		repository.save(cor);
		return "redirect:../lista";
	}

	@GetMapping(value = "excluir")
	public String excluir(@PathParam(value = "id") Integer id) {
		repository.deleteById(id);
		return "redirect:../lista";
	}

}