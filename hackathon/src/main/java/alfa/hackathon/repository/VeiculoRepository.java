package alfa.hackathon.repository;


import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;

import alfa.hackathon.model.Veiculo;

public interface VeiculoRepository extends JpaRepository<Veiculo, Integer>{
	
	Optional<Veiculo> findById(Integer id);

}
