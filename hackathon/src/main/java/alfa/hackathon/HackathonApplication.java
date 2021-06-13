package alfa.hackathon;

//import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

//import alfa.hackathon.model.Cor;
//import alfa.hackathon.repository.CorRepository;

@SpringBootApplication
public class HackathonApplication implements CommandLineRunner {
	
	//@Autowired
	//CorRepository repository;

	public static void main(String[] args) {
		SpringApplication.run(HackathonApplication.class, args);
	}
	
	@Override
	public void run(String... args) throws Exception {
		// TODO Auto-generated method stub
		
		//Cor cor = new Cor();
		//cor.setCor("azul");
		
		//repository.save(cor);
				
	}
}

