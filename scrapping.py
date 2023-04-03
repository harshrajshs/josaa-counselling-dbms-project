from autoscraper import AutoScraper
url = "http://josaa.admissions.nic.in/Applicant/seatallotmentresult/currentorcr.aspx"

lists = ['Institute','Academic Program','Name',	'Quota',	'Seat Type',	'Gender',	'Opening Rank',	'Closing Rank']

scraper = AutoScraper()
result = scraper.build(url,lists)
data = scraper.get_result_similar(url, grouped=True)
print(data)

key = list(data.keys())
print(key)

