import instaloader
import pandas as pd

# Carregar instância do Instaloader
L = instaloader.Instaloader()

# Logar com suas credenciais
L.login('login', 
        'senha')

# Baixar posts de um perfil público
profile = 'alojuca'
L.download_profile(profile, profile_pic=False, fast_update=True)

# Obter os posts do perfil
from instaloader import Profile

# Inicializando o profile
profile = Profile.from_username(L.context, profile)

# Listas para armazenar as descrições dos posts e os comentários
posts_data = []
comments_data = []

# ID único para os posts
post_id = 1

# Loop para obter os posts e comentários
for post in profile.get_posts():
    # Adicionar a descrição do post ao dataframe de posts
    posts_data.append({'post_id': post_id, 'description': post.caption})
    
    # Loop para obter os comentários e adicionar ao dataframe de comentários
    for comment in post.get_comments():
        comments_data.append({
            'post_id': post_id,
            'comment_username': comment.owner.username,
            'comment_text': comment.text
        })
    # Incrementar o ID único para o próximo post
    post_id += 1

# Criar dataframes a partir das listas de dados
df_posts = pd.DataFrame(posts_data)
df_comments = pd.DataFrame(comments_data)